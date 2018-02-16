var k_description = k_name = percentageString = '';
var breadcrumbs_num = k_activated = 0;
var selecting_related = false;

var container = d3.select('#knowledge_browser').node();
var container_bounds = container.getBoundingClientRect();

// Dimensions of sunburst.
var width = container_bounds.width * 0.5;
var height = width;
var radius = Math.min(width, height) / 2;

// Breadcrumb dimensions: width, height, spacing, width of tip/tail.
var b = {
	w: container_bounds.width * 0.5,
	h: 24,
	s: 2,
	t: 10
};

var color = d3.scaleOrdinal(d3.schemeCategory20);

// Total size of all segments; we set this later, after loading the data.
var totalSize = 0;

var vis = d3.select("#knowledge_chart").append("svg:svg")
	.attr("xmlns", "http://www.w3.org/2000/svg")
	.attr("xlink", "http://www.w3.org/1999/xlink")
	.attr("width", width)
	.attr("height", height)
	.append("svg:g")
	.attr("id", "knowledge_paths")
	.attr("transform", "translate(" + width / 2 + "," + height / 2 + ")");

var partition = d3.partition();

// Calculate the d path for each slice.
var arc = d3.arc()
	.startAngle(function(d) {
		return Math.max(0, Math.min(2 * Math.PI, x(d.x0)));
	})
	.endAngle(function(d) {
		return Math.max(0, Math.min(2 * Math.PI, x(d.x1)));
	})
	.innerRadius(function(d) {
		return Math.max(0, y(d.y0));
	})
	.outerRadius(function(d) {
		return Math.max(0, y(d.y1));
	});

var x = d3.scaleLinear()
	.range([0, 2 * Math.PI]);

var y = d3.scaleSqrt()
	.range([0, radius]);

// Use d3.text and d3.csvParseRows so that we do not need to have a header
// row, and can receive the csv as an array of arrays.
// d3.text("visit-sequences.csv", function(text) {
//   var csv = d3.csvParseRows(text);
//   var json = buildHierarchy(csv);
//   createVisualization(json);
// });

d3.json(
	json_url,
	// "assets/flare.json", // for testing
	function(error, root) {
		if(error) console.log(error);
		createVisualization(root);
	}
);

$.fn.triggerSVGEvent = function(eventName) {
 var event = document.createEvent('SVGEvents');
 event.initEvent(eventName,true,true);
 this[0].dispatchEvent(event);
 return $(this);
};

// Main function to draw and set up the visualization, once we have the data.
function createVisualization(json) {

	// Basic setup of page elements.
	initializeBreadcrumbTrail();

	// Bounding circle underneath the sunburst, to make it easier to detect
	// when the mouse leaves the parent g.
	vis.append("svg:circle")
		.attr("r", radius)
		.style("opacity", 0);

	// console.log(json)
	// countChildren(json); // to debug the structure

	// Turn the data into a d3 hierarchy and calculate the sums.
	var root = d3.hierarchy(json)
		.sum(function(d) {
			// return d.size; // use 'size' property
			// console.log(d);
			// if(d.children) return d.children.length;
			return 1; //
		})
	// .sort(function(a, b) { return b.value - a.value; })
	;
	//	console.log(root)

	//	node = root;

	// For efficiency, filter nodes to keep only those large enough to see.
	var nodes = partition(root).descendants()
	// .filter(function(d) {
	//     return (d.x1 - d.x0 > 0.005); // 0.005 radians = 0.29 degrees
	// })
	;
	// console.log(nodes)

	var path = vis.data([root]).selectAll("path")
		.data(nodes)
		.enter().append("svg:path")
		// .attr("display", function(d) { return d.depth ? null : "none"; })
		.attr("d", arc)
//		.attr("id", function(d) {
//			if (!d.data.link_property || d.data.link_property != 'Related') return d.data.id;
//		})
//		.attr("data-id", function(d) {
//			if(d.data.link_property) return d.data.id;
//		})
		// .attr("fill-rule", "evenodd")
		// .style("fill", function(d) { return colors[d.data.name]; })
		.style("fill", function(d) {
			return (d.children ? color(d.data.name) : color(d.parent.data.name));
		})
		// .style("fill", function (d) { return d.parent ? color(d.x0) : "white"; })  // Return white for root.
		//		.style("opacity", 1)
		.on("mouseover", kp_mouseover)
		.on("click", kp_click);

	// Add the mouseleave handler to the bounding circle.
	// d3.select("#knowledge_paths").on("mouseleave", mouseleave);

	// Get total size of the tree = value of root node from partition.
	totalSize = path.datum().value;

	// ZOOM:
	function kp_click(d) {
//		d3.select("#knowledge_center").style("visibility", "hidden");

		//		node = d;
		
		console.log('go',d);
		
//		if(select_id){
		if(d.depth > 0 && d.height < 2){
			
			window.location = '?parent=' + encodeURIComponent(d.parent.data.name) + '&item='+encodeURIComponent(d.data.name);

		} else {
			path.transition()
				.duration(1000)
				.attrTween("d", arcTweenZoom(d));
		}
	}

	// path.transition().duration(1000).attrTween("d", arcTweenData);

//	d3.select("#knowledge_center")
//		.style("top", (radius - (110 / 2)) + 'px')
//		.style("left", (radius - (140 / 2)) + 'px');

	d3.select("#knowledge_paths")
		.on("mouseover", function(d) {
			if(k_activated !=1){
				d3.select("#knowledge_paths").attr('class', 'paths_activated');
				k_activated = 1;
			}
		});

	if(select_id){ // highlight based on URL query
		d3.select("#knowledge_paths").attr('class', 'paths_activated');
		$("#"+select_id).triggerSVGEvent('mouseover');
	}

};

function countChildren(data) {
	if (data.children) {
		if (data.children.length) {
			var len = data.children.length;
			// console.log(data.name+' : '+len);
			for (var i = 0; i < len; i++) {
				countChildren(data.children[i]);
			}
		} else console.log(data.name + ' no length');
	} //else console.log(data.name+' no children');

	return false;
}

// function mouseleave(d) {
// 	d3.select("#knowledge_center").style("visibility", "hidden");
// }

// Fade all but the current sequence, and show it in the breadcrumb trail.
function kp_mouseover(d) {

	// console.log(d);

//	if(d.data.id && select_id != d.data.id){
//		select_id = d.data.id;
//		selecting_related = false;
//	} else {
//		selecting_related = true;
//	}

	// var percentage = (100 * d.value / totalSize).toPrecision(3);
	// percentageString = percentage + "%";
	// if (percentage < 0.1) {
	//   percentageString = "< 0.1%";
	// }

	var sequenceArray = d.ancestors().reverse();
	// sequenceArray.shift(); // remove root node from the array

	// Fade all the segments
	if(!selecting_related) d3.selectAll("path.relevant").attr("class", '');

	// Then highlight only those that are an ancestor of the current segment.
	vis.selectAll("path")
		.filter(function(node) {
			return (sequenceArray.indexOf(node) >= 0);
		})
		.attr("class", 'relevant');

	if(!selecting_related) updateBreadcrumbs(sequenceArray);

//	if(!selecting_related && select_id){
//		var related = $("#knowledge_paths").find("[data-id='" + select_id + "']");
//		// console.log(related)
//		if(related && related.length) related.each(function(){
//			selecting_related = true;
//			$(this).triggerSVGEvent('mouseover');
//		});
//	}

	// d3.select("#knowledge_percentage").text(percentageString);
}

function initializeBreadcrumbTrail() {
	// Add the svg area.
	var trail = d3.select("#knowledge_legend").append("svg:svg")
		.attr("width", b.w)
		.attr("height", 310)
		.attr("id", "knowledge_trail");

	// Add the label at the end, for the percentage.
	// trail.append("svg:text")
	//   .attr("id", "endlabel")
	//   .style("fill", "#000");

	// https://stackoverflow.com/questions/6691674/how-can-i-limit-or-clip-text-in-svg
	trail.append("svg:clipPath")
		.attr("id", "clip_legend")
		.append("svg:rect")
		.attr("width", b.w - 10)
		.attr("height", b.h);
}

// Generate a string that describes the points of a breadcrumb polygon.
function breadcrumbPoints(d, i) {
	//console.log(breadcrumbs_num, i)
	var w = b.w - 10;
	var h = b.h;
//	var h = (breadcrumbs_num == i + 1 ? b.h + 2 : b.h);
	var points = [];
	points.push("0,0");
	points.push(w + ",0");
	points.push(w + b.t + "," + (h / 2));
	points.push(w + "," + h);
	points.push("0," + h);
	if (i > 0) { // Leftmost breadcrumb; don't include 6th vertex.
		points.push(b.t + "," + (h / 2));
	}
	return points.join(" ");
}

function breadcrumbData(d, i) {

	if (breadcrumbs_num == i + 1) k_name = d.data.name; // final crumb

// 	if (d.data.link_property == 'Related') k_name = 'Related to: '+k_name;

	if (d.data.description) {
		k_description = d.data.description;
	} else k_description = '';

	return d.data.name;
}

// Update the breadcrumb trail to show the current sequence and percentage.
function updateBreadcrumbs(nodeArray) {

	breadcrumbs_num = nodeArray.length;
	var old_description = k_description;

	// Data join; key function combines name and depth (= position in sequence).
	var g = d3.select("#knowledge_trail")
		.attr("height", (breadcrumbs_num * (b.h + b.s)) + 10)
		.selectAll("g")
		.data(nodeArray, function(d) {
			return d.name + d.depth;
		});

	// Add breadcrumb and label for entering nodes.
	var entering = g.enter().append("svg:g");

	entering.append("svg:polygon")
		.attr("points", breadcrumbPoints)
		.style("fill", function(d) {
			return color(d.data.name);
		});

	entering.append("a")
		.attr("xlink:href", function(d) {
			return '?parent=' + encodeURIComponent(d.parent.data.name) + '&item='+encodeURIComponent(d.data.name);
		})
//		.attr("target", '_blank')
		.append("svg:text")
		.attr("x", 18)
		.attr("y", b.h / 2)
		//      .attr("textLength", b.w-25)
		//      .attr("lengthAdjust", "spacingAndGlyphs")
		.attr("clip-path", "url(#clip_legend)")
		.attr("dy", "0.35em")
		.attr("text-anchor", "left")
//		.attr("class", function(d, i) {
//			if (breadcrumbs_num == i + 1) return 'endlabel';
//		})
		.text(breadcrumbData);

	// Set position for entering and updating nodes.
	entering.merge(g).attr("transform", function(d, i) {
		// console.log(i, b);
		return "translate(0, " + i * (b.h + b.s) + ")";
	});

	// Remove existing nodes.
	g.exit().remove();

	// Now move and update the string at the end.
	// d3.select("#knowledge_trail").select("#endlabel")
	//     .attr("x", 18)
	//     .attr("y", (nodeArray.length + 0.5) * (b.h + b.s))
	//     .attr("dy", "0.35em")
	//     .attr("text-anchor", "left")
	//     .text(description);
	
	d3.select(".knowledge_name").text(k_name);

	if (k_description != old_description)
		d3.select("#knowledge_description").html(k_description);
	
	// Make the breadcrumb trail visible, if it's hidden.
	//  d3.select("#knowledge_trail")
	//      .style("visibility", "");

	 d3.select("#knowledge_content")
	 		.style("visibility", "");

}

//// ZOOM

// When zooming: interpolate the scales.
function arcTweenZoom(d) {
	var xd = d3.interpolate(x.domain(), [d.x0, d.x1]),
		yd = d3.interpolate(y.domain(), [d.y0, 1]), // [d.y0, 1]
		yr = d3.interpolate(y.range(), [d.y0 ? 40 : 0, radius]);

	//	console.log(xd, yd, yr);

	return function(d, i) {
		return i ?
			function(t) {
				return arc(d);
			} :
			function(t) {
				x.domain(xd(t));
				y.domain(yd(t)).range(yr(t));
				return arc(d);
			};
	};
}

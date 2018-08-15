
function wrap() {
    var self = d3.select(this),
        textWidth = self.node().getComputedTextLength(),    // Width of text in pixel.
        initialText = self.text(),                          // Initial text.
        textLength = initialText.length,                    // Length of text in characters.
        text = initialText,
        precision = 10, //textWidth / width,                // Adjustable precision.
        maxIterations = 100; // width;                      // Set iterations limit.

    while (maxIterations > 0 && text.length > 0 && Math.abs(width - textWidth) > precision) {

        text = /*text.slice(0,-1); =*/(textWidth >= width) ? text.slice(0, -textLength * 0.15) : initialText.slice(0, textLength * 1.15);
        self.text(text + '...');
        textWidth = self.node().getComputedTextLength();
        textLength = text.length;
        maxIterations--;
    }
    console.log(width - textWidth);
}
//usage:
//element.append('text').append('tspan').text('djag sdgjsdf jkhfdsg kfgsd').each(wrap);


function drawLegend() {

  // Dimensions of legend item: width, height, spacing, radius of rounded rect.
  var li = {
    w: 75, h: 30, s: 3, r: 3
  };

  var legend = d3.select("#legend").append("svg:svg")
      .attr("width", li.w)
      .attr("height", d3.keys(colors).length * (li.h + li.s));

  var g = legend.selectAll("g")
      .data(d3.entries(colors))
      .enter().append("svg:g")
      .attr("transform", function(d, i) {
              return "translate(0," + i * (li.h + li.s) + ")";
           });

  g.append("svg:rect")
      .attr("rx", li.r)
      .attr("ry", li.r)
      .attr("width", li.w)
      .attr("height", li.h)
      .style("fill", function(d) { return d.value; });

  g.append("svg:text")
      .attr("x", li.w / 2)
      .attr("y", li.h / 2)
      .attr("dy", "0.35em")
      .attr("text-anchor", "middle")
      .text(function(d) { return d.key; });
}

function toggleLegend() {
  var legend = d3.select("#legend");
  if (legend.style("visibility") == "hidden") {
    legend.style("visibility", "");
  } else {
    legend.style("visibility", "hidden");
  }
}


// Take a 2-column CSV and transform it into a hierarchical structure suitable
// for a partition layout. The first column is a sequence of step names, from
// root to leaf, separated by hyphens. The second column is a count of how
// often that sequence occurred.
function buildHierarchy(csv) {
  var root = {"name": "root", "children": []};
  for (var i = 0; i < csv.length; i++) {
    var sequence = csv[i][0];
    var size = +csv[i][1];
    if (isNaN(size)) { // e.g. if this is a header row
      continue;
    }
    var parts = sequence.split("-");
    var currentNode = root;
    for (var j = 0; j < parts.length; j++) {
      var children = currentNode["children"];
      var nodeName = parts[j];
      var childNode;
      if (j + 1 < parts.length) {
   // Not yet at the end of the sequence; move down the tree.
 	var foundChild = false;
 	for (var k = 0; k < children.length; k++) {
 	  if (children[k]["name"] == nodeName) {
 	    childNode = children[k];
 	    foundChild = true;
 	    break;
 	  }
 	}
  // If we don't already have a child node for this branch, create it.
 	if (!foundChild) {
 	  childNode = {"name": nodeName, "children": []};
 	  children.push(childNode);
 	}
 	currentNode = childNode;
      } else {
 	// Reached the end of the sequence; create a leaf node.
 	childNode = {"name": nodeName, "size": size};
 	children.push(childNode);
      }
    }
  }
  return root;
};


//// RDF triples from https://github.com/Rathachai/d3rdf/

function filterNodesById(nodes,id){
	return nodes.filter(function(n) { return n.id === id; });
}

function triplesToGraph(triples){

	// svg.html("");

	//Graph
	var graph={nodes:[], links:[]};

	//Initial Graph from triples
	triples.forEach(function(triple){
		var subjId = triple.subject;
		var predId = triple.predicate;
		var objId = triple.object;

		var subjNode = filterNodesById(graph.nodes, subjId)[0];
		var objNode  = filterNodesById(graph.nodes, objId)[0];

		if(subjNode==null){
			subjNode = {id:subjId, label:subjId, weight:1};
			graph.nodes.push(subjNode);
		}

		if(objNode==null){
			objNode = {id:objId, label:objId, weight:1};
			graph.nodes.push(objNode);
		}


		graph.links.push({source:subjNode, target:objNode, predicate:predId, weight:1});
	});

	return graph;
}


// When switching data: interpolate the arcs in data space.
function arcTweenData(a, i) {
	// (a.x0s ? a.x0s : 0) -- grab the prev saved x0 or set to 0 (for 1st time through)
	// avoids the stash() and allows the sunburst to grow into being
	var oi = d3.interpolate({
		x0: (a.x0s ? a.x0s : 0),
		x1: (a.x1s ? a.x1s : 0)
	}, a);

	function tween(t) {
		var b = oi(t);
		a.x0s = b.x0;
		a.x1s = b.x1;
		return arc(b);
	}
	if (i == 0) {
		// If we are on the first arc, adjust the x domain to match the root node
		// at the current zoom level. (We only need to do this once.)
		var xd = d3.interpolate(x.domain(), [node.x0, node.x1]);
		return function(t) {
			x.domain(xd(t));
			return tween(t);
		};
	} else {
		return tween;
	}
}
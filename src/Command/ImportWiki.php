<?php
namespace App\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

// use App\Controller\TaxonomyImportWikibase;

use Psr\Log\LoggerInterface;


class ImportWiki extends Command
{


  protected function configure()
  {
    $this
        // the name of the command (the part after "bin/console")
        ->setName('import:wiki')

        // the short description shown while running "php bin/console list"
        ->setDescription('Imports from wiki')

        // the full command description shown when running the command with
        // the "--help" option
        ->setHelp('This command imports from wiki')
    ;
  }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $tiw = new \App\Controller\TaxonomyImportWikibase();
        $tiw->import();

    }
}

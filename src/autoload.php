<?php // this is an autogenerated file - do not edit (created Wed, 17 Aug 2011 19:40:28 +0200)
spl_autoload_register(
   function($class) {
      static $classes = null;
      if ($classes === null) {
         $classes = array(
            'theseer\\phpdox\\abstractbuilder' => '/builder/AbstractBuilder.php',
            'theseer\\phpdox\\analyser' => '/Analyser.php',
            'theseer\\phpdox\\api' => '/API.php',
            'theseer\\phpdox\\application' => '/Application.php',
            'theseer\\phpdox\\applicationexception' => '/Application.php',
            'theseer\\phpdox\\builderexception' => '/builder/AbstractBuilder.php',
            'theseer\\phpdox\\classbuilder' => '/ClassBuilder.php',
            'theseer\\phpdox\\cli' => '/CLI.php',
            'theseer\\phpdox\\collector' => '/Collector.php',
            'theseer\\phpdox\\container' => '/Container.php',
            'theseer\\phpdox\\docblock\\descriptionparser' => '/docblock/parser/DescriptionParser.php',
            'theseer\\phpdox\\docblock\\docblock' => '/docblock/DocBlock.php',
            'theseer\\phpdox\\docblock\\docblockexception' => '/docblock/DocBlock.php',
            'theseer\\phpdox\\docblock\\factory' => '/docblock/Factory.php',
            'theseer\\phpdox\\docblock\\factoryexception' => '/docblock/Factory.php',
            'theseer\\phpdox\\docblock\\genericelement' => '/docblock/GenericElement.php',
            'theseer\\phpdox\\docblock\\genericelementexception' => '/docblock/GenericElement.php',
            'theseer\\phpdox\\docblock\\genericparser' => '/docblock/parser/GenericParser.php',
            'theseer\\phpdox\\docblock\\inlineprocessor' => '/docblock/InlineProcessor.php',
            'theseer\\phpdox\\docblock\\internalparser' => '/docblock/parser/InternalParser.php',
            'theseer\\phpdox\\docblock\\invalidelement' => '/docblock/InvalidElement.php',
            'theseer\\phpdox\\docblock\\invalidparser' => '/docblock/parser/InvalidParser.php',
            'theseer\\phpdox\\docblock\\licenseparser' => '/docblock/parser/LicenseParser.php',
            'theseer\\phpdox\\docblock\\paramparser' => '/docblock/parser/ParamParser.php',
            'theseer\\phpdox\\docblock\\parser' => '/docblock/Parser.php',
            'theseer\\phpdox\\docblock\\varparser' => '/docblock/parser/VarParser.php',
            'theseer\\phpdox\\errorhandler' => '/ErrorHandler.php',
            'theseer\\phpdox\\event' => '/Event.php',
            'theseer\\phpdox\\eventexception' => '/Event.php',
            'theseer\\phpdox\\eventfactory' => '/EventFactory.php',
            'theseer\\phpdox\\eventfactoryexception' => '/EventFactory.php',
            'theseer\\phpdox\\eventhandlerinterface' => '/EventHandlerInterface.php',
            'theseer\\phpdox\\factory' => '/Factory.php',
            'theseer\\phpdox\\factoryexception' => '/Factory.php',
            'theseer\\phpdox\\factoryinterface' => '/FactoryInterface.php',
            'theseer\\phpdox\\generator' => '/EventGenerator.php',
            'theseer\\phpdox\\generatorexception' => '/EventGenerator.php',
            'theseer\\phpdox\\graphbuilder' => '/builder/graphbuilder/graphbuilder.php',
            'theseer\\phpdox\\htmlbuilder' => '/builder/htmlbuilder/HtmlBuilder.php',
            'theseer\\phpdox\\htmlbuilder\\functions' => '/builder/htmlbuilder/functions.php',
            'theseer\\phpdox\\progresslogger' => '/logger/ProgressLogger.php',
            'theseer\\phpdox\\progressloggerexception' => '/logger/ProgressLogger.php',
            'theseer\\phpdox\\service' => '/builder/Service.php',
            'theseer\\phpdox\\shellprogresslogger' => '/logger/ShellProgressLogger.php',
            'theseer\\phpdox\\todobuilder' => '/builder/todobuilder/todobuilder.php'
          );
      }
      $cn = strtolower($class);
      if (isset($classes[$cn])) {
         require __DIR__ . $classes[$cn];
      }
   }
);

<?php declare(strict_types=1);

/*
   $INFO = 'https://the.exa.website/features/tree-view';
*/   

echo $tmp = <<< ____EOT
<dl>
  <dt> Tree view of all files: </dt>
  <dd>
    <pre>
 ../zzz
├── app
│  ├── CONTROLLERS
│  ├── MODELS
│  └── VIEWS
│     ├── incs
│     │  ├── doctype.php
│     │  ├── footer-side.php
│     │  ├── footer.php
│     │  ├── header.php
│     │  ├── navigation.php
│     │  ├── side-examples.php
│     │  └── side-single.php
│     ├── pages
│     │  ├── examples.php
│     │  ├── index.php
│     │  └── rtfm.php
├── codecov.yml
├── composer.json
├── composer.lock 
├── INFO.php
├── my.cnf
├── phpunit.xml
├── public_html
│  ├── assets
│  │  ├── css
│  │  │  ├── home.css
│  │  │  ├── main.css
│  │  │  ├── rtfm.css
│  │  │  └── style.css
│  │  ├── docs
│  │  │  ├── ajax.php
│  │  │  ├── blurb.php
│  │  │  ├── example.php
│  │  │  ├── features.php
│  │  │  ├── initial-installation.php
│  │  │  ├── introducing.php
│  │  │  ├── programming.php
│  │  │  ├── requirements.php
│  │  │  ├── spare-001.php
│  │  │  ├── spare-002.php
│  │  │  ├── spare-003.php
│  │  │  └── wiki-pictures.php
│  │  ├── imgs
│  │  │  ├── jb_in_shorts.gif
│  │  └── js
│  │     └── ajax.js
│  ├── examples.php
│  ├── favicon.ico
│  ├── index.php
│  ├── robots.txt
│  └── rtfm.php
├── README.md
├── src
│  ├── Database
│  │  ├── PdoCrud.php
│  │  └── PdoCrudOLD.php
│  ├── Debug
│  │  ├── HTMLVarDumper.php
│  │  ├── ShowDebugData.php
│  │  └── VarDumper.php
│  ├── Docs
│  │  └── README.md
│  ├── Form
│  │  └── ValidateFormRequiredWhitelist.php
│  ├── Html
│  │  └── HtmlTable.php
│  ├── Logging
│  │  ├── LoginLogger.php
│  │  └── SQLLoginAttemptsLog.php
│  ├── Mail
│  │  ├── MailSubmissionAgent.php
│  │  └── PHPMailSubmissionAgent.php
│  ├── Routing
│  │  └── Route.php
│  └── Utilities
│     ├── ActionMessages.php
│     ├── Flash.php
│     ├── MessageDisplay.php
│     ├── MessageHTML.php
│     ├── MessageJson.php
│     └── TokenGenerator.php
├── system
│  └── bootup.php
└── TEMP
   └── logs
     <?php require 'tree.php'; ?>
    </pre>  
  </dd>
</dl>  
____EOT;

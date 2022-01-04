<?php declare(strict_types=1);

$title  = 'benanamen Branch no on my Repositiory';
$online = 'https://Jeremy.anetizer.com';

$URN    = '178.18.246.168'; // 167.71.222.214
$SRC    = '/var/www/a-Perfect-App-branch/';
$DST    = '/var/www/anetizer.com/jeremy/';
$CLONE  = 'git clone --branch Perfect-App-branch https://github.com/John-Betong/perfect-app-starter.git a-Perfect-App-branch';

$repJB  = 'https://github.com/john-betong/perfect-app-starter';
$repBEN = 'https://github.com/benanamen/perfect-app-starter';
$ol     = getGits();

echo $tmp = <<< ____EOT
<!doctype html><html lang="en-GB">
<head>
<title> $title </title>
<style>
:root {
--gff: LIGHTGRAY;
--dad: GRAY;
--son: DARKGRAY;
--bby: CHARCOAL;
--wht: SNOW; 
--blk: #333; 
}
* {cd ..
  margin:0; padding:0;
}
body {
  font-size:1rem/42px;
  background-color: var(--wht); color: var(--blk);
}
header,
header h1 {
  text-align: center;
  background-color: var(--son); color:var(--wht);
  border-bottom: solid 1px var(--blk);
}
section {
  width:88%; margin: 0 auto 2rem;
  padding: 0 .21rem;
  border:dotted 0px var(--blk);
}
ol {
  line-height:2;
  font-size: smaller;
}
ol li {
  margin: 0 1.42rem;

}
dl dt {
  font-size: large; font-weight:700; 
  margin: 1rem .88rem 0rem 0;
  background-color: var(--son); color:var(--wht);
}
dl dd {
  font-size: small; line-height:1.6;
  margin: 0 0 0 .88rem
}
</style>
</head>

<body>
<header>
  <h1> Perfect-App-Starter </h1>
</header>  
<section>
  <dl>
    <dt> Online:  </dt> 
    <dd> <a href="$online"> Link </a> </dd>

    <dt> Exam - Benanamen </dt>
    <dd> 
      <a href="https://perfect-app-starter.myexam.us">
        Link to Exam Center
      </a>
    <dd>
    <dt> Benanamen Repository:  </dt> 
    <dd> <a href="$repBEN"> Link </a> </dd>

    <dt> John-Betong Repository:  </dt> 
    <dd> <a href="$repJB"> Link </a> </dd>

    <dt> Git Commands </dt>
    <dd>
      git pull # dont' forget to backup 
      <br>
      git config pull.rebase false  # merge (the default strategy)
      <br>
      git config pull.rebase true   # rebase
      <br>
      git config pull.ff only       # fast-forward only
      <br>
      git add .
      <br>
      git commit -m "DETAILS"
      <br>
      git status
      <br>
      BAD !!! 
      ### git push https://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@github.com/john-betong/perfect-app-framework
      ### 
      <br>
      git push https://github.com/john-betong/perfect-app-framework 505cf9b..268c5a5  Perfect-App-framework -> jb-branch

      git push https://ghp_qdI50SvC7HSSK8dglktZpbWg7E21fG3BYeK.com/john-betong/perfect-app-framework -> jb-branch
      ghp_qdI50SvC7HSSK8dglktZpbWg7E21fG3BYeK
      git push perfect-app-framework -> jb-branch

    </dd>
      
    <dt> RSYNC </dt>
    <dd>
      rsync -avz $SRC -e ssh root@$URN:$DST
    </dd>

    <dt> Verbose Git Commands: </dt>
    <dd> $ol </dd>
  </dl>  
</section>

<section>
  <h2> 
    More Git Stuff 
  </h2>
  <dl>
    <dt>
      SYNCHRONISE WITH BENANAMEN DEVELOPMENT
    </dt>
    <dd>
      git pull https://github.com/benanamen/perfect-app-starter.git 
    </dd>  
    <dd>
      git config --global github.user YOUR_USERNAME
      <br>
      git config --global user.email youremail@domain.com
      <br>
      git config --global github.token YOURTOKEN
      <br>
      git pull https://github.com/john-betong/perfect-app-starter.git
      <br>
    </dd>
  </dl>
<section>

</body></html>
____EOT;


# #######################################3
function getGits() : string 
{
  $result = '';

  $rep = ' https://github.com/John-Betong/Perfect-App-branch.git';
  $tmps = [
    'CLONE ' .$rep,
    'BRANCH development',
    'ADD .',
    'STATUS',
    'PUSH'  .$rep,
    'MERGE -M "INFO GOES HERE"',
    'not required - FETCH' .$rep,
    'not required - PULL'  .$rep,
    '',
  ];

  $result  = '<ol>';
    foreach($tmps as $key => $item) :
      $result .= '<li>'
              .    'git ' .$item
              . '</li>'
              ;
    endforeach;
  $result .= '</ol>';

  return $result;
}
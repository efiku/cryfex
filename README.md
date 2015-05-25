## ~(˘▾˘~) Throw funny exceptions ! (~˘▾˘)~

###  ಠ_ಥ("PHP !");

[![Build Status](https://travis-ci.org/efik/cryfex.svg?branch=master)](https://travis-ci.org/efik/cryfex) [![Latest Stable Version](https://poser.pugx.org/efik/cryfex/v/stable)](https://packagist.org/packages/efik/cryfex) [![Total Downloads](https://poser.pugx.org/efik/cryfex/downloads)](https://packagist.org/packages/efik/cryfex) [![Latest Unstable Version](https://poser.pugx.org/efik/cryfex/v/unstable)](https://packagist.org/packages/efik/cryfex) [![License](https://poser.pugx.org/efik/cryfex/license)](https://packagist.org/packages/efik/cryfex) [![SensioLabsInsight](https://insight.sensiolabs.com/projects/bf3a8366-d6f9-40ed-ae10-e838cc9c32ec/mini.png)](https://insight.sensiolabs.com/projects/bf3a8366-d6f9-40ed-ae10-e838cc9c32ec)[![Code Climate](https://codeclimate.com/github/efik/cryfex/badges/gpa.svg)](https://codeclimate.com/github/efik/cryfex)

##Download with composer:
```sh
   composer require "efik/cryfex:dev-master"
```

##Small preview
```php
<?php
   function divide($a, $b){
     return ($b !== 0) ? $a/$b : throw new ಠ_ಥ("Why you do this..");
   }
   try{
      divide( 10 / 0 ); 
   }
   catch( ಠ_ಥ $e ){
        die( $e->getMessage() ); 
   }
  
```

License: [LICENSE](https://github.com/efik/cryfex/blob/master/LICENSE)

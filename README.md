## ~(˘▾˘~) Throw funny exceptions ! (~˘▾˘)~

###  ಠ_ಥ("PHP !");

[![Build Status](https://travis-ci.org/efiku/cryfex.svg?branch=master)](https://travis-ci.org/efiku/cryfex) [![Latest Stable Version](https://poser.pugx.org/efiku/cryfex/v/stable)](https://packagist.org/packages/efiku/cryfex) [![Total Downloads](https://poser.pugx.org/efiku/cryfex/downloads)](https://packagist.org/packages/efiku/cryfex) [![Latest Unstable Version](https://poser.pugx.org/efiku/cryfex/v/unstable)](https://packagist.org/packages/efiku/cryfex) [![License](https://poser.pugx.org/efiku/cryfex/license)](https://packagist.org/packages/efiku/cryfex) [![Code Climate](https://codeclimate.com/github/efiku/cryfex/badges/gpa.svg)](https://codeclimate.com/github/efik/cryfex)

##Download with composer:
```sh
   composer require "efiku/cryfex"
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

License: [LICENSE](https://github.com/efiku/cryfex/blob/master/LICENSE)

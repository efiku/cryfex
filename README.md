## Funny Class! 

###  ಠ_ಥ("Why..");

[![Build Status](https://travis-ci.org/efik/cryex.svg?branch=master)](https://travis-ci.org/efik/cryex)
[![Latest Stable Version](https://poser.pugx.org/efik/cryex/v/stable)](https://packagist.org/packages/efik/cryex) [![Total Downloads](https://poser.pugx.org/efik/cryex/downloads)](https://packagist.org/packages/efik/cryex) [![Latest Unstable Version](https://poser.pugx.org/efik/cryex/v/unstable)](https://packagist.org/packages/efik/cryex) [![License](https://poser.pugx.org/efik/cryex/license)](https://packagist.org/packages/efik/cryex)

##Download with composer:
```sh
   composer require "efik/cryex:dev-master"
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

License: [LICENSE](https://github.com/efik/cryex/blob/master/LICENSE)

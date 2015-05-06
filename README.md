## Funny Class! 
Build status:
[![Build Status](https://travis-ci.org/efik/cryex.svg?branch=master)](https://travis-ci.org/efik/cryex)

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

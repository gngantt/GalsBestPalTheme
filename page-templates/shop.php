<?php
/**
 * Template Name: Template: Shop
 *
 * Template for displaying a page just with the header and footer area and a "naked" content area in between.
 * Good for landingpages and other types of pages where you want to add a lot of custom markup.
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();
$container = get_theme_mod( 'understrap_container_type' );
?>

<div class="container my-5">
	
	<h1 style="font-size:55px">Shop</h1>
	<hr style="height:3px;border-width:0;color:black;background-color:black">
    <h2 class="subHeader">Shopping Supports our Mission</h2>
	
	
		<div class="row justify-content-center">
			<h2>GBP Products</h2><br>
	<div id='product-component-1706291934390'></div>
<script type="text/javascript">
/*<![CDATA[*/
(function () {
  var scriptURL = 'https://sdks.shopifycdn.com/buy-button/latest/buy-button-storefront.min.js';
  if (window.ShopifyBuy) {
    if (window.ShopifyBuy.UI) {
      ShopifyBuyInit();
    } else {
      loadScript();
    }
  } else {
    loadScript();
  }
  function loadScript() {
    var script = document.createElement('script');
    script.async = true;
    script.src = scriptURL;
    (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(script);
    script.onload = ShopifyBuyInit;
  }
  function ShopifyBuyInit() {
    var client = ShopifyBuy.buildClient({
      domain: 'adba96-2.myshopify.com',
      storefrontAccessToken: 'd1e231ac7f44ca340a68654a2fc4c553',
    });
    ShopifyBuy.UI.onReady(client).then(function (ui) {
      ui.createComponent('product', {
        id: '9008893722944',
        node: document.getElementById('product-component-1706291934390'),
        moneyFormat: '%24%7B%7Bamount%7D%7D',
        options: {
  "product": {
    "styles": {
      "product": {
        "@media (min-width: 601px)": {
          "max-width": "calc(25% - 20px)",
          "margin-left": "20px",
          "margin-bottom": "50px"
        }
      },
      "button": {
        ":hover": {
          "background-color": "#e60a77"
        },
        "background-color": "#ff0b84",
        ":focus": {
          "background-color": "#e60a77"
        }
      }
    },
    "buttonDestination": "modal",
    "contents": {
      "options": false
    },
    "text": {
      "button": "View product"
    }
  },
  "productSet": {
    "styles": {
      "products": {
        "@media (min-width: 601px)": {
          "margin-left": "-20px"
        }
      }
    }
  },
  "modalProduct": {
    "contents": {
      "img": false,
      "imgWithCarousel": true,
      "button": false,
      "buttonWithQuantity": true
    },
    "styles": {
      "product": {
        "@media (min-width: 601px)": {
          "max-width": "100%",
          "margin-left": "0px",
          "margin-bottom": "0px"
        }
      },
      "button": {
        ":hover": {
          "background-color": "#e60a77"
        },
        "background-color": "#ff0b84",
        ":focus": {
          "background-color": "#e60a77"
        }
      }
    },
    "text": {
      "button": "Add to cart"
    }
  },
  "option": {},
  "cart": {
    "styles": {
      "button": {
        ":hover": {
          "background-color": "#e60a77"
        },
        "background-color": "#ff0b84",
        ":focus": {
          "background-color": "#e60a77"
        }
      }
    },
    "text": {
      "total": "Subtotal",
      "button": "Checkout"
    }
  },
  "toggle": {
    "styles": {
      "toggle": {
        "background-color": "#ff0b84",
        ":hover": {
          "background-color": "#e60a77"
        },
        ":focus": {
          "background-color": "#e60a77"
        }
      }
    }
  }
},
      });
    });
  }
})();
/*]]>*/
</script><br>

	<br><br>
	<h2>Shop Amazon Products</h2>
	<p class="text">Shop our Amazon Affiliate store for some suggested products to buy your new PAL! A portion of the sales will help GBP!</p>
	
	<div class="row justify-content-center"><br>
					<a target="_blank" href="https://galsbestpal.com/wp-content/uploads/2023/01/AMAZON-SHOP.pdf">
			<img class="img-fluid" 
                src="<?php echo get_template_directory_uri(); ?>/images/Amazon Affiliates.png" 
                alt="Gals Best Pal logo"
                height="250"
                width="250"/>
						</a>
       	 			</div><br><br>
	
	
   
	<h2>Bonfire Store</h2>
	<p class="text">Click the bonfire image below to shop GBP Swag! Each item ships directly to you!</p>
	
	<div class="row justify-content-center">
					<a target="_blank" href="https://www.bonfire.com/store/gals-best-pal/">
			<img class="img-fluid" 
                src="<?php echo get_template_directory_uri(); ?>/images/bonfire.jpeg" 
                alt="Gals Best Pal logo"
                height="250"
                width="250"/>
						</a>
       	 			</div><br><br>
	
	
	
	
	
	
				
	
</div>

<?php
get_footer();
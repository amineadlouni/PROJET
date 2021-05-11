<table border="1" align=center>
					<tr >
						
		
				
					<td colspan="2">
						<h2 align="right">totale à payer : <?php echo number_format($som, 2, ',', ' ')." Dh HT";?></h2>
						<h3 align="right">+DROITS ET FRAIS SUP. : 5 600.00 Dh</h3>	
					</td>
					</tr>
					<tr>	
					<td>
                   
					<?php
                    $_POST['car']=1;
						IF($_POST['car']==1 || $_POST['car']==2 || $_POST['car']==3 || $_POST['car']==4 || $_POST['car']==5 || $_POST['car']==6 ){
						?>
						<img src="./images/logovv.png" >
							<?php
						}
						else{	
							?>
						<img src="./images/logopp.png" >
							<?php
						}
						?>
						
				
	
					</td>
<td valign=top> 
					<!-- paypal -->
					<div id="smart-button-container">
      <div style="text-align: center;">
        <div style="margin-bottom: 1.25rem;">
          <p></p>
          <select id="item-options"><option value="sans livraison" price="0">sans livraison - 0 USD</option><option value="livraison partout au maroc " price="500">livraison partout au maroc  - 500 USD</option><option value="livraison express 2 jours" price="1000">livraison express 2 jours - 1000 USD</option></select>
          <select style="visibility: hidden" id="quantitySelect"></select>
        </div>
      <div id="paypal-button-container"></div>
      </div>
    </div>
    <script src="https://www.paypal.com/sdk/js?client-id=sb&currency=USD" data-sdk-integration-source="button-factory"></script>
    <script>
      function initPayPalButton() {
        var shipping = 560;
        var itemOptions = document.querySelector("#smart-button-container #item-options");
    var quantity = parseInt();
    var quantitySelect = document.querySelector("#smart-button-container #quantitySelect");
    if (!isNaN(quantity)) {
      quantitySelect.style.visibility = "visible";
    }
    var orderDescription = '';
    if(orderDescription === '') {
      orderDescription = 'Item';
    }
    paypal.Buttons({
      style: {
        shape: 'rect',
        color: 'gold',
        layout: 'vertical',
        label: 'checkout',
        
      },
      createOrder: function(data, actions) {
        var selectedItemDescription = itemOptions.options[itemOptions.selectedIndex].value;
        var selectedItemPrice = parseFloat(itemOptions.options[itemOptions.selectedIndex].getAttribute("price"));
        var tax = (3 === 0) ? 0 : (selectedItemPrice * (parseFloat(3)/100));
        if(quantitySelect.options.length > 0) {
          quantity = parseInt(quantitySelect.options[quantitySelect.selectedIndex].value);
        } else {
          quantity = 1;
        }

        tax *= quantity;
        tax = Math.round(tax * 100) / 100;
        var priceTotal = quantity * selectedItemPrice + parseFloat(shipping) + tax;
        priceTotal = Math.round(priceTotal * 100) / 100;
        var itemTotalValue = Math.round((selectedItemPrice * quantity) * 100) / 100;

        return actions.order.create({
          purchase_units: [{
            description: orderDescription,
            amount: {
              currency_code: 'USD',
              value: priceTotal,
              breakdown: {
                item_total: {
                  currency_code: 'USD',
                  value: itemTotalValue,
                },
                shipping: {
                  currency_code: 'USD',
                  value: shipping,
                },
                tax_total: {
                  currency_code: 'USD',
                  value: tax,
                }
              }
            },
            items: [{
              name: selectedItemDescription,
              unit_amount: {
                currency_code: 'USD',
                value: selectedItemPrice,
              },
              quantity: quantity
            }]
          }]
        });
      },
      onApprove: function(data, actions) {
        return actions.order.capture().then(function(details) {
          alert('Transaction completed by ' + details.payer.name.given_name + '!');
        });
      },
      onError: function(err) {
        console.log(err);
      },
    }).render('#paypal-button-container');
  }
  initPayPalButton();
    </script>

	<!-- end paypal-->
</td></tr>
</table>

<td valign=bottom >
					<?php
                    
						IF($_POST['car']==1 || $_POST['car']==2 || $_POST['car']==3 || $_POST['car']==4 || $_POST['car']==5 || $_POST['car']==6 ){
						?>
						<img style="float: left;" src="./images/logovv.ico" >
							<?php
						}
						else{	
							?>
						<img style="float: left;margin-top:50px" src="./images/logopp.ico" >
							<?php
						}
						?>
						
				
	
					</td>
<td width=1000px> 
					<!-- paypal -->
					<div id="smart-button-container">
      <div style="text-align: center;">
        <div id="paypal-button-container"></div>
      </div>
    </div>
  <script src="https://www.paypal.com/sdk/js?client-id=sb&currency=USD" data-sdk-integration-source="button-factory"></script>
  <script>
    function initPayPalButton() {
      paypal.Buttons({
        style: {
          shape: 'rect',
          color: 'gold',
          layout: 'vertical',
          label: 'buynow',
          
        },

        createOrder: function(data, actions) {
          return actions.order.create({
            purchase_units: [{"amount":{"currency_code":"USD","value":561.03,"breakdown":{"item_total":{"currency_code":"USD","value":1},"shipping":{"currency_code":"USD","value":560},"tax_total":{"currency_code":"USD","value":0.03}}}}]
          });
        },

        onApprove: function(data, actions) {
          return actions.order.capture().then(function(details) {
            alert('Transaction completed by ' + details.payer.name.given_name + '!');
          });
        },

        onError: function(err) {
          console.log(err);
        }
      }).render('#paypal-button-container');
    }
    initPayPalButton();
  </script>	
	<!-- end paypal-->
</td></tr>
</table>	
						</div>


			</section>
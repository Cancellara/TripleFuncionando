1- Se añade a la tabla shop los campos:
	activation_code
	status

2-Se añade la ruta shop/rate

3-Se crea la vista shop.rate que muestra el formulario de elección de tarifa

4-En el controlador shopController se crea el método showRateForm que simplemente devuelve la vista.

5-Añadimos en el modelo shop los campos status y activation_code como filleable

6-Añadimos la ruta payPremium

7-Creamos el controlador ShopPayPalController Se crean los métodos activateShop y payPremium

8-Se añade la ruta de activación de tienda 

9-en Shop/loginController se sobrescirben los métodos login y sendLoginResponse

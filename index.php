<?php
require(__DIR__ ."/controller/client.controller.php");
require(__DIR__ ."/controller/product.controller.php");
require(__DIR__ ."/model/product.model.php");
require(__DIR__ ."/model/client.model.php");
require(__DIR__ ."/model/commande.model.php");
require(__DIR__ ."/view/client.view.php");
require(__DIR__ ."/view/product.view.php");
require(__DIR__ ."/service/service.php");
require(__DIR__ ."/utils/error.utils.php");
require(__DIR__ ."/utils/view.utils.php");
require(__DIR__ ."/utils/validator.php");


saveProduct();

archiverProduit();
ShowProduct($productsArchived);
ShowProduct($products);
saveClient();
showClient();
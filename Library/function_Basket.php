<?php
function nothing(){
  echo "string";
}
function isLock(){
   if (isset($_SESSION['Basket']) && $_SESSION['Basket']['lock'])
   return true;
   else
   return false;
}
function compterArticles()
{
   if (isset($_SESSION['Basket']))
   return count($_SESSION['Basket']['nameBook']);
   else
   return 0;

}
function deleteBasket(){
   unset($_SESSION['Basket']);
}
function createBasket(){
   if (!isset($_SESSION['Basket'])){
      $_SESSION['Basket']=array();
      $_SESSION['Basket']['nameBook'] = array();
      $_SESSION['Basket']['quantity'] = array();
      $_SESSION['Basket']['price'] = array();
      $_SESSION['Basket']['lock'] = false;
   }
   return true;
}

function AddBook($nameBook,$quantity,$price){
   if (createBasket() && !isLock())
   {
      //Si le produit existe déjà on ajoute seulement la quantité
      $iproduct = array_search($nameBook,  $_SESSION['Basket']['nameBook']);

      if ($iproduct !== false)
      {
         $_SESSION['Basket']['quantity'][$iproduct] += $quantity ;
      }
      else
      {
         //Sinon on ajoute le produit
         array_push( $_SESSION['Basket']['nameBook'],$nameBook);
         array_push( $_SESSION['Basket']['quantity'],$quantity);
         array_push( $_SESSION['Basket']['price'],$price);
      }
   }
   else
   echo "Error.";
}
function deleteproduct($nameBook){
   //Si le Basket existe
   if (createBasket() && !isLock())
   {
      //Nous allons passer par un Basket temporaire
      $tmp=array();
      $tmp['nameBook'] = array();
      $tmp['quantity'] = array();
      $tmp['price'] = array();
      $tmp['lock'] = $_SESSION['Basket']['lock'];

      for($i = 0; $i < count($_SESSION['Basket']['nameBook']); $i++)
      {
         if ($_SESSION['Basket']['nameBook'][$i] !== $nameBook)
         {
            array_push( $tmp['nameBook'],$_SESSION['Basket']['nameBook'][$i]);
            array_push( $tmp['quantity'],$_SESSION['Basket']['quantity'][$i]);
            array_push( $tmp['price'],$_SESSION['Basket']['price'][$i]);
         }

      }
      //On remplace le Basket en session par notre Basket temporaire à jour
      $_SESSION['Basket'] =  $tmp;
      //On efface notre Basket temporaire
      unset($tmp);
   }
   else
   echo "Error";
}
function modifyQuantity($nameBook,$quantity){
   //Si le Basket existe
   if (createBasket() && !isLock())
   {
      //Si la quantité est positive on modifie sinon on supprime l'article
      if ($quantity > 0)
      {
         //Recherche du produit dans le Basket
         $iproduct = array_search($nameBook,  $_SESSION['Basket']['nameBook']);

         if ($iproduct !== false)
         {
            $_SESSION['Basket']['quantity'][$iproduct] = $quantity ;
         }
      }
      else
      deleteproduct($nameBook);
   }
   else
   echo "Error";
}
function totalPrice(){
   $total=0;
   for($i = 0; $i < count($_SESSION['Basket']['nameBook']); $i++)
   {
      $total += $_SESSION['Basket']['quantity'][$i] * $_SESSION['Basket']['price'][$i];
   }
   return $total;
}
 ?>

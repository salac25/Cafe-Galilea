jQuery(document).ready(function ($) {
  // Update cart count on add to cart
  $(document.body).on("added_to_cart", function () {
    updateCartCount();
  });

  // Update cart count on remove from cart
  $(document.body).on("click", ".remove", function (e) {
    // console.log("Hello");
    e.preventDefault();
    var product_id = $(this).attr("data-product_id");
    console.log(product_id);

    $.ajax({
      type: "POST",
      url: ajax_cart_update_params.ajax_url,
      data: {
        action: "remove_from_cart",
        product_id: product_id,
      },
      success: function (response) {
        updateCartCount();
      },
    });
  });

  // Function to update cart count
  function updateCartCount() {
    $.ajax({
      type: "POST",
      url: ajax_cart_update_params.ajax_url,
      data: {
        action: "update_cart_count",
      },
      success: function (response) {
        const cartCount = JSON.parse(response);
        $(".cart-count")[0].textContent = cartCount.cart_count;
      },
    });
  }
});

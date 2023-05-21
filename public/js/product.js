var quantity = 1
        product_array = localStorage.getItem('product_array') ? JSON.parse(localStorage.getItem('product_array')) : []
        update_basket_length()
        calculate_sub_total()
        product_array.find((item) => {
            if (item.id == product[0].id) {
                quantity = item.qnt
                document.getElementById("quantity").innerHTML = quantity;
            }})
        // manage_product()
        $('#btn_min').click(function() {
            if (quantity > 1) {
                quantity = quantity - 1;
                product_array.find((item) => {
                    if (item.id == product[0].id) {
                        item.qnt = quantity
                        document.getElementById("quantity").innerHTML = quantity;
                        console.log(product_array);
                        calculate_sub_total()
                        manage_product()
                    }
                })
            }
        });
        $('#btn_plus').click(function() {
            if (product[0].quantity > quantity) {
                quantity = quantity + 1;
                product_array.find((item) => {
                    if (item.id == product[0].id) {
                        item.qnt = quantity
                        document.getElementById("quantity").innerHTML = quantity;
                        calculate_sub_total()
                        manage_product()
                    }
                })
            }
        });
        $('#basket').click(function() {
            manage_product()
        })

        function update_basket_length() {
            var basket = product_array
            document.getElementById("basket_header").innerHTML = basket?.length ? basket.length : 0;
        }
        document.getElementById("quantity").innerHTML = quantity;

        function calculate_sub_total() {
            sub_total = 0
            product_array.forEach((item) => {
                sub_total += item.price * item.qnt
            })
            document.getElementById("sub_total").innerHTML = sub_total + ' DZ';

        }

        function manage_product() {
            let already_in_cart = product_array.find((item) => item.id == product[0].id);
            if (!already_in_cart) {
                product[0].qnt = quantity;
                product_array.push(product[0])
                update_basket_length()
                calculate_sub_total()
            }else{
                console.log(already_in_cart);
                quantity = already_in_cart.qnt
            }
            localStorage.setItem('product_array', JSON.stringify(product_array));
        }

const { createApp } = Vue;

createApp({
    data() {
        return {
            cart: JSON.parse(localStorage.getItem('cart')) || []
        }
    },

    computed: {
        total() {
            return this.cart.reduce((sum, item) => {
                return sum + item.price * item.quantity;
            }, 0);
        }
    },

    methods: {
        saveCart() {
            localStorage.setItem('cart', JSON.stringify(this.cart));
        },

        addToCart(product) {
            let existing = this.cart.find(i => i.id === product.id);

            if (existing) {
                existing.quantity++;
            } else {
                this.cart.push({
                    ...product,
                    quantity: 1
                });
            }

            this.saveCart();
        },

        increase(item) {
            item.quantity++;
            this.saveCart();
        },

        decrease(item) {
            if (item.quantity > 1) {
                item.quantity--;
            }
            this.saveCart();
        },

        remove(item) {
            this.cart = this.cart.filter(i => i.id !== item.id);
            this.saveCart();
        }
    }

}).mount('#app');
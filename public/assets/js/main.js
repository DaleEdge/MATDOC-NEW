let orderToken = "";
const cashfree = new Cashfree();
const paymentDom = document.getElementById("payment-form");
const success = function(data) {
    if (data.order && data.order.status == "PAID") {
        $.ajax({
            url: "checkstatus.php?order_id=" + data.order.orderId,
            success: function(result) {
                if (result.order_status == "PAID") {
                    alert("Order PAID");
                }
            },
        });
    } else {
        //order is still active
        alert("Order is ACTIVE")
    }
}
let failure = function(data) {
    alert(data.order.errorText)
}
document.getElementById("pay-btn").addEventListener("click", () => {
    const dropConfig = {
        "components": [
            "order-details",
            "card",
            "netbanking",
            "app",
            "upi"
        ],
        "orderToken": orderToken,
        "onSuccess": success,
        "onFailure": failure,
        "style": {
            "backgroundColor": "#ffffff",
            "color": "#11385b",
            "fontFamily": "Lato",
            "fontSize": "14px",
            "errorColor": "#ff0000",
            "theme": "light", //(or dark)
        }
    }
    if(orderToken == "") {
        $.ajax({
            url: "fetchtoken.php",
            success: function(result) {
                orderToken = result["order_token"];
                const dropConfig = {
                    "components": [
                        "order-details",
                        "card",
                        "netbanking",
                        "app",
                        "upi"
                    ],
                    "orderToken": orderToken,
                    "onSuccess": success,
                    "onFailure": failure,
                    "style": {
                        "backgroundColor": "#ffffff",
                        "color": "#11385b",
                        "fontFamily": "Lato",
                        "fontSize": "14px",
                        "errorColor": "#ff0000",
                        "theme": "light", //(or dark)
                    }
                }
                const cashfree = new Cashfree();
                const paymentDom = document.getElementById("payment-form");
                cashfree.initialiseDropin(paymentDom, dropConfig);
            },
        });
    } else {
        cashfree.initialiseDropin(paymentDom, dropConfig);
    }

})
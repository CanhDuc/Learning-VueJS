<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>VueJS v-for</title>
    <script src="https://cdn.jsdelivr.net/npm/vue@2.5.17/dist/vue.js"></script>

</head>
<body>
    <div id="databinding">
        <input type="text" v-on:keyup.enter = "showItems">
        <h1>Show Items</h1>

        <h1 v-if = "items.length > 0">List Items : </h1>
        <ul>
            <li v-for = "fruit in items">{{fruit}}</li>
        </ul>
    </div>

    <script>
        new Vue({
            el : '#databinding',
            data : {
                items : [],
                styleobj: {
                  width: "30%",
                  padding: "12px 20px",
                  margin: "8px 0",
                  boxSizing: "border-box"
               }
            },
            methods : {
                showItems : function(event){
                    this.items.push(event.target.value);
                }
            }
        })
    </script>
</body>
</html>
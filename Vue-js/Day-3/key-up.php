<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>VueJS</title>
    <script src="https://cdn.jsdelivr.net/npm/vue@2.5.17/dist/vue.js"></script>
</head>
<body>
    <div id="testkey">
        <input type="text" v-on:keyup.enter = "showInputValue">
        <h1>{{txtcontent}}</h1>
    </div>

    <script>
        new Vue({
            el : '#testkey',
            data : {
                txtcontent : ''
            },
            methods : {
                showInputValue : function(event){
                    this.txtcontent = event.target.value;
                }
            }
        })
    </script>
</body>
</html>
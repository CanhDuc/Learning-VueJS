<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>VueJS Rending</title>
    <script src="https://cdn.jsdelivr.net/npm/vue@2.5.17/dist/vue.js"></script>

</head>
<body>
    <div id = "databinding">
         <button v-on:click = "showdata" v-bind:style = "styleobj">Click Me</button>
         <span style = "font-size:25px;"><b>{{show}}</b></span>
         <h1 v-if = "show">This is h1 tag</h1>
         <h2 v-else>This is h2 tag</h2>
         
         <h2 v-show = "show">Hello</h2>
      </div>

      <script type = "text/javascript">
         var vm = new Vue({
            el: '#databinding',
            data: {
               show: true,
               styleobj: {
                  backgroundColor: '#2196F3!important',
                  cursor: 'pointer',
                  padding: '8px 16px',
                  verticalAlign: 'middle',
               }
            },
            methods : {
               showdata : function() {
                  this.show = !this.show;
               }
            },
         });
      </script>
</body>
</html>
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
    <div id="databinding">
        <input type="text" v-model="var1">
		+
		<input type="text" v-model="var2">
		=
		<input type="text" v-model="total">
		<br>
		<br>
		<button v-on:click = "result">Result</button>

        <div v-bind:style="styleobj" v-on:mouseover="changebgcolor" v-on:mouseout="originalcolor"></div>
        <a href = "http://www.google.com" v-on:click.prevent = "clickme" target = "_blank" v-bind:style = "styleobj">Click Me</a>
    </div>

    <script>
        new Vue({
            el : '#databinding',
            data : {
                var1 : 0,
                var2 : 0,
                total : '',
                styleobj : {
                    width : '100px',
                    height : '100px',
                    background : 'red'
                }
            },
            methods : {
                changebgcolor : function(){
                    this.styleobj.background = 'blue';
                },
                originalcolor : function(){
                    this.style.background = 'red';
                },
                result : function(){
					return this.total = parseInt(this.var1) + parseInt(this.var2);
				}
            }
        })
    </script>
</body>
</html>
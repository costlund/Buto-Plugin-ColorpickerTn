# Buto-Plugin-ColorpickerTn

https://github.com/taufik-nurrohman/color-picker

https://taufik-nurrohman.github.io/color-picker/

## Include widget

```
type: widget
data:
  plugin: colorpicker/tn
  method: include
```

## Add to element

```
var picker = new CP( document.getElementById('_id_of_input_element_') );
picker.on("change", function(color) {
    this.source.value = '#' + color;
    this.source.style.background = '#'+color;
});                  
picker.source.oncut   = function(){picker.set(this.value).enter();};
picker.source.onpaste = function(){picker.set(this.value).enter();};
picker.source.onkeyup = function(){picker.set(this.value).enter();};
picker.source.oninput = function(){picker.set(this.value).enter();};
```

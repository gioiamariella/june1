/*****************JQuery*********************/
$(document).ready(function () {
  var trigger = $('.hamburger'),
      overlay = $('.overlay'),
     isClosed = false;

    trigger.click(function () {
      hamburger_cross();      
    });

    function hamburger_cross() {

      if (isClosed == true) {          
        overlay.hide();
        trigger.removeClass('is-open');
        trigger.addClass('is-closed');
        isClosed = false;
      } else {   
       
        trigger.removeClass('is-closed');
        trigger.addClass('is-open');
        isClosed = true;
      }
  }
  
  $('[data-toggle="offcanvas"]').click(function () {
        $('#wrapper').toggleClass('toggled');
  });  
});

/*Colors dancing on the ceiling*/
$(document).ready(function () {

  $("#color").spectrum({
      color: "#000",
      preferredFormat: "hex"
  });

  $("#canvascolor").spectrum({
      color: "#fff",
      preferredFormat: "hex"
  });

});

/*********************End JQuery *******************/

/*FabricJS*/
var canvas = new fabric.Canvas('c');

canvas.setHeight(384);
canvas.setWidth(336);

/*Dashed Line*/
var line = new fabric.Line([0, 185, 392, 185], {
    strokeDashArray: [5, 5],
    stroke: 'black',
    selectable: false
});

/*Add Line*/
document.getElementById('line').addEventListener("click", function (e) {
  var color = document.getElementById("color").value;
   canvas.add(new fabric.Line([80, 130, 180, 130], {
        left: 50,
        top: 50,
        stroke:  color
    }));
});

/*Add Circle*/
document.getElementById('circle').addEventListener("click", function (e) {
  var color = document.getElementById("color").value;
   canvas.add(new fabric.Circle({
   left: 50,
   top: 50,
   fill:  color,
   radius:30
  }));
});

/*Add Rectangle*/
document.getElementById('rect').addEventListener("click", function (e) {
  var color = document.getElementById("color").value;
   canvas.add(new fabric.Rect({
   left: 50,
   top: 50,
   fill:  color,
   width: 50,
  height: 50
  }));
});

/*Add Triangle*/
document.getElementById('triangle').addEventListener("click", function (e) {
  var color = document.getElementById("color").value;
  canvas.add(new fabric.Triangle({
  width: 50, 
  height: 50, 
  fill:  color,
  left: 50, 
  top: 50
  }));
});

/*Add Text*/
  document.getElementById('set_text').addEventListener("click", function (e) {
  var color = document.getElementById("color").value;
  var text = document.getElementById("ta").value;
  var font_family = document.getElementById("font-family").value;
  var font_weight = document.getElementById("font-weight").value;
  var font_size = document.getElementById("font-size").value;

  if(font_family === "ubuntu" && font_weight === "regular"){
    canvas.add(new fabric.Text(text, {
      left: 50,
      top: 50,
      fontFamily: 'Ubuntu',
      fill:  color,
      fontSize: font_size
    }));

  }

  else if(font_family === "ubuntu" && font_weight === "italic"){
    canvas.add(new fabric.Text(text, {
      left: 50,
      top: 50,
      fontFamily: 'Ubuntu',
      fontStyle: 'italic',
       fill:  color,
      fontSize: font_size
    }));
  }

  else if(font_family === "ubuntu" && font_weight === "bold"){
    canvas.add(new fabric.Text(text, {
      left: 50,
      top: 50,
      fontFamily: 'Ubuntu',
      fontWeight: 'bold',
       fill:  color,
      fontSize: font_size
    }));
  }

  else if(font_family === "ubuntu" && font_weight === "bold_italic"){
    canvas.add(new fabric.Text(text, {
      left: 50,
      top: 50,
      fontFamily: 'Ubuntu',
       fontWeight: 'bold',
      fontStyle: 'italic',
       fill:  color,
      fontSize: font_size
    }));
  }

  else if(font_family === "arial" && font_weight === "regular"){
    canvas.add(new fabric.Text(text, {
      left: 50,
      top: 50,
      fontFamily: 'Arial',
      fill:color,
      fontSize: font_size
    }));

  }

  else if(font_family === "arial" && font_weight === "italic"){
    canvas.add(new fabric.Text(text, {
      left: 50,
      top: 50,
      fontFamily: 'Arial',
      fontStyle: 'italic',
       fill:  color,
      fontSize: font_size
    }));
  }

  else if(font_family === "arial" && font_weight === "bold"){
    canvas.add(new fabric.Text(text, {
      left: 50,
      top: 50,
      fontFamily: 'Arial',
      fontWeight: 'bold',
       fill:  color,
      fontSize: font_size
    }));
  }

  else if(font_family === "arial" && font_weight === "bold_italic"){
    canvas.add(new fabric.Text(text, {
      left: 50,
      top: 50,
      fontFamily: 'Arial',
       fontWeight: 'bold',
      fontStyle: 'italic',
       fill:  color,
      fontSize: font_size
    }));
  }

});

/*Set Color*/


document.getElementById('set_canvascolor').addEventListener("click", function (e) {
  var canvascolor = document.getElementById("canvascolor").value;
   canvas.backgroundColor=canvascolor;
   canvas.renderAll();
});


/*Selection Mode*/
document.getElementById('selection').addEventListener("click", function (e) {
   canvas.isDrawingMode = false;
});

/*Drawing Mode*/
document.getElementById('drawing').addEventListener("click", function (e) {
  var color = document.getElementById("color").value;
  var stroke = document.getElementById('line-width').value;
   canvas.freeDrawingBrush.color = color;
   canvas.freeDrawingBrush.width = stroke;
   canvas.isDrawingMode = true;
});

/*Polygon Mode*/
document.getElementById('polygon').addEventListener("click", function (e) {

  var color = document.getElementById("color").value;
  var stroke = document.getElementById('line-width').value;
  var point1;
  var line=null;
  var canvasScale = 1;
  var SCALE_FACTOR = 1.2;
  var bool = true;

  canvas.on('mouse:down', function (options) {

    var x = options.e.clientX - canvas._offset.left;
    var y = options.e.clientY - canvas._offset.top;
    
    
    var circle = new fabric.Circle({
        left: x,
        top: y,
        fill:  color,
        originX: 'center',
        originY: 'center',
        hasControls: false,
        hasBorders: false,
        lockMovementX: false,
        lockMovementY: false,
        hoverCursor: 'default',
        radius:1
    });

    if(bool)
        canvas.add(circle);

    point1 = new fabric.Point(x, y);
    if(line){
        line = new fabric.Line([line.get('x2'), line.get('y2'), x, y], {
            stroke:  color,
            hasControls: false,
            hasBorders: false,
            lockMovementX: false,
            lockMovementY: false,
            hoverCursor: 'default'
        });
    }else{
        line = new fabric.Line([x, y, x, y], {
            stroke:  color,
            hasControls: false,
            hasBorders: false,
            lockMovementX: false,
            lockMovementY: false,
            hoverCursor: 'default'
        });
    }
    if(bool)
        canvas.add(line);
      document.getElementById('selection').addEventListener("click", function (e) {
        var lines = canvas.getObjects('line');
          var firstLine = lines[1];
          var lastLine = lines[lines.length - 1];
          line = new fabric.Line([firstLine.get('x2'), firstLine.get('y2'), lastLine.get('x2'), lastLine.get('y2')], {
              stroke:  color,
              hasControls: false,
              hasBorders: false,
              lockMovementX: false,
              lockMovementY: false,
              hoverCursor: 'default'
          });
          canvas.add(line);
          bool = false;
      canvas.isDrawingMode = false;
    });
    
    });
});


/*Delete*/
function deleteObjects(){
  var activeObject = canvas.getActiveObject(),
    activeGroup = canvas.getActiveGroup();
    if (activeObject) {
        if (confirm('Are you sure?')) {
            canvas.remove(activeObject);
        }
    }
    else if (activeGroup) {
        if (confirm('Are you sure?')) {
            var objectsInGroup = activeGroup.getObjects();
            canvas.discardActiveGroup();
            objectsInGroup.forEach(function(object) {
            canvas.remove(object);
            });
        }
    }
}
document.getElementById('delete').addEventListener("click", function (e) {
   canvas.isDrawingMode = false;
     deleteObjects();
});


/*Download*/
function downloadCanvas(link, canvasId, filename) {
    link.href = document.getElementById(canvasId).toDataURL();
    link.download = filename;
}

document.getElementById('download').addEventListener('click', function() {
    downloadCanvas(this, 'c', 'card.png');
}, false);

/*Upload image*/
document.getElementById('file').addEventListener("change", function (e) {
  var file = e.target.files[0];
  var reader = new FileReader();
  reader.onload = function (f) {
    var data = f.target.result;                    
    fabric.Image.fromURL(data, function (img) {
      var oImg = img.set({left: 0, top: 0, angle: 00,width:150, height:150}).scale(0.9);
      canvas.add(oImg).renderAll();
      var a = canvas.setActiveObject(oImg);
      var dataURL = canvas.toDataURL({format: 'png', quality: 0.8});
    });
  };
  reader.readAsDataURL(file);
});


canvas.add(line);
canvas.renderAll();
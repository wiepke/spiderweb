/**
 * Created by fides-WHK on 13.03.2017.
 */
function diagram(Kriterien, values,id,uni,diacount) {
    bonsai.run(document.getElementById('diagram'+diacount), {
        id: id,
        uni: uni,
        Kriterien: Kriterien,
        values: values,
        code: function () {
            let piccenterx = 400;
            let picwidth = piccenterx;
            let picheight = 500;
            let maxradius;
            let id = stage.options.id;
            let uni = stage.options.uni;
            let Kriterien = stage.options.Kriterien;
            let values = stage.options.values;
            if (piccenterx < picheight)
                maxradius = piccenterx;
            else maxradius = picheight;
            new Circle(picwidth - piccenterx / 2, picheight / 2, maxradius / 2 - 20)
                .addTo(stage)
                .stroke('red', 3);
            new Circle(picwidth - piccenterx / 2, picheight / 2, maxradius / 2 - 75)
                .addTo(stage)
                .stroke('red', 3);
            new Circle(picwidth - piccenterx / 2, picheight / 2, maxradius / 2 - 130)
                .addTo(stage)
                .stroke('red', 3);
            /*just 3 red circles so far*/
            let xvalue = 1/3;
            let yvalue = 1/3;
            let sign = 1;
            let y = 0.0;
            let x = 0.0;
            for (let i = 0; i < values.length; i++) {
                y = maxradius / 2 * Math.sin(2*Math.PI*(i+1)/values.length);
                x = maxradius / 2 * Math.cos(2*Math.PI*(i+1)/values.length);
                new Text(Kriterien[i]).addTo(stage).attr({
                    fontFamily: 'Arial, sans-serif',
                    fontSize: '11',
                    textFillColor: 'red',
                    textStrokeColor: 'black',
                    textStrokeWidth: 1,
                    x: x+picwidth - piccenterx/2,
                    y: y+picheight/2
                });
               /*
                * Point (x1,y1) is the center of the width and on the upper end
                * All following points circle in equal distances around the center
                */
                new Path()
                    .moveTo(picwidth - piccenterx / 2, picheight / 2)
                    .stroke('gray', 2)
                    .lineTo(x + picwidth - piccenterx / 2,picheight / 2 + y)
                    .closePath()
                    .addTo(stage);
            }
            new Text("Uni: "+uni).addTo(stage).attr({
                fontFamily: 'Arial, sans-serif',
                fontSize: '20',
                textFillColor: 'red',
                textStrokeColor: 'black',
                textStrokeWidth: 1,
                x:20,
                y:20
            });
            new Text("ID: "+id).addTo(stage).attr({
                fontFamily: 'Arial, sans-serif',
                fontSize: '20',
                textFillColor: 'red',
                textStrokeColor: 'black',
                textStrokeWidth: 1,
                x:150,
                y: 20
            });
            /*
             * The basic picture (circles and dimensions) is done now
             * The length of "Kriterien" is variable.
             * dimension values on the rim.
             */
            if (maxradius / 2 * maxradius / 2 - (y - picheight / 2) * (y - picheight / 2) <= 0)
                sign = -1;
            else
                sign = 1;
            y = (maxradius / 2 - (values[0]-1)*10) * Math.sin(2*Math.PI/values.length);
            x = (maxradius / 2 - (values[0]-1)*10) * Math.cos(2*Math.PI/values.length);
            let inner = new Path()
                .moveTo(x * xvalue * values[0] + picwidth - piccenterx / 2, picheight / 2 + y * yvalue * values[0])
                .fill(gradient.radial(['transparent', 'black'], 200, 50, 50));
            /*
             * "inner" is the shadowed part of the graphic
             */
            let outer = new Path()
                .moveTo(x * xvalue * values[0] + picwidth - piccenterx / 2, picheight / 2 + y * yvalue * values[0])
                .stroke('black', 4);
            /*
             * "outer" is the black line connecting the values
             */
            for (let i=0; i<values.length;i++) {
                y = (maxradius / 2 - (values[i]-1)*10) * Math.sin(2*Math.PI*(i+1)/values.length);
                x = (maxradius / 2 - (values[i]-1)*10) * Math.cos(2*Math.PI*(i+1)/values.length);
                inner.lineTo(picwidth - piccenterx / 2 + x * xvalue * values[i], picheight / 2 + y * yvalue * values[i]);
                outer.lineTo(picwidth - piccenterx / 2 + x * xvalue * values[i], picheight / 2 + y * yvalue * values[i]);
            }
            inner.closePath();
            inner.addTo(stage);
            outer.closePath();
            outer.addTo(stage);
        },
        width: 420,
        height: 480
        /*
         * todo: width and height need to be scalable at some point
         */
    });
}
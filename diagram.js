/**
 * Created by fides-WHK on 13.03.2017.
 */
function diagram(Kriterien, values, uni, course, diacount) {
    bonsai.run(document.getElementById('diagram'+diacount), {
        uni: uni,
        Kriterien: Kriterien,
        values: values,
        course: course,
        code: function () {
            let picwidth = 490;
            let picheight = 500;
            let maxradius=400;
            let uni = stage.options.uni;
            let Kriterien = stage.options.Kriterien;
            let values = stage.options.values;
            let course = stage.options.course;
            new Circle(picwidth / 2, picheight / 2, maxradius / 2 - 20)
                .addTo(stage)
                .stroke('red', 3);
            new Circle(picwidth / 2, picheight / 2, maxradius / 2 - 75)
                .addTo(stage)
                .stroke('red', 3);
            new Circle(picwidth / 2, picheight / 2, maxradius / 2 - 130)
                .addTo(stage)
                .stroke('red', 3);
            /*just 3 red circles so far*/
            let xvalue = 1/3;
            let yvalue = 1/3;
            let y = 0.0;
            let x = 0.0;
            let slidein=0;
            for (let i = 0; i < values.length; i++) {
                y = maxradius / 2 * Math.sin(2*Math.PI*(i+1)/values.length);
                x = maxradius / 2 * Math.cos(2*Math.PI*(i+1)/values.length);
                if (x<=0) slidein=-1;
                else slidein=0;
                new Text(Kriterien[i]).addTo(stage).attr({
                    fontFamily: 'Arial, sans-serif',
                    fontSize: '11',
                    textFillColor: 'red',
                    textStrokeColor: 'black',
                    textStrokeWidth: 1,
                    x: x+picwidth/2+slidein*(Kriterien[i].length*5),
                    y: y+picheight/2
                });
               /*
                * Point (x1,y1) is the center of the width and on the upper end
                * All following points circle in equal distances around the center
                */
                new Path()
                    .moveTo(picwidth / 2, picheight / 2)
                    .stroke('gray', 2)
                    .lineTo(x + picwidth / 2,picheight / 2 + y)
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
            new Text("Course: "+course).addTo(stage).attr({
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
            y = (maxradius / 2 - (values[0]-1)*10) * Math.sin(Math.PI/values.length);
            x = (maxradius / 2 - (values[0]-1)*10) * Math.cos(Math.PI/values.length);
            let inner = new Path()
                .moveTo(x * xvalue * values[0] + picwidth / 2, picheight / 2 + y * yvalue * values[0])
                .fill(gradient.radial(['transparent', 'black'], 200, 50, 50));
            /*
             * "inner" is the shadowed part of the graphic
             */
            let outer = new Path()
                .moveTo(x * xvalue * values[0] + picwidth / 2, picheight / 2 + y * yvalue * values[0])
                .stroke('black', 4);
            /*
             * "outer" is the black line connecting the values
             */
            for (let i=0; i<values.length;i++) {
                y = (maxradius / 2 - (values[i]-1)*10) * Math.sin(2*Math.PI*(i+0.5)/values.length);
                x = (maxradius / 2 - (values[i]-1)*10) * Math.cos(2*Math.PI*(i+0.5)/values.length);
                inner.lineTo(picwidth / 2 + x * xvalue * values[i], picheight / 2 + y * yvalue * values[i]);
                outer.lineTo(picwidth / 2 + x * xvalue * values[i], picheight / 2 + y * yvalue * values[i]);
                y = (maxradius / 2 - (values[i]-1)*10) * Math.sin(2*Math.PI*(i+0.75)/values.length); /*Tested */
                x = (maxradius / 2 - (values[i]-1)*10) * Math.cos(2*Math.PI*(i+0.75)/values.length);
                inner.lineTo(picwidth / 2 + x * xvalue * values[i], picheight / 2 + y * yvalue * values[i]);
                outer.lineTo(picwidth / 2 + x * xvalue * values[i], picheight / 2 + y * yvalue * values[i]);
                y = (maxradius / 2 - (values[i]-1)*10) * Math.sin(2*Math.PI*(i+1)/values.length);
                x = (maxradius / 2 - (values[i]-1)*10) * Math.cos(2*Math.PI*(i+1)/values.length);
                inner.lineTo(picwidth / 2 + x * xvalue * values[i], picheight / 2 + y * yvalue * values[i]);
                outer.lineTo(picwidth / 2 + x * xvalue * values[i], picheight / 2 + y * yvalue * values[i]);
                y = (maxradius / 2 - (values[i]-1)*10) * Math.sin(2*Math.PI*(i+1.25)/values.length);
                x = (maxradius / 2 - (values[i]-1)*10) * Math.cos(2*Math.PI*(i+1.25)/values.length);
                inner.lineTo(picwidth / 2 + x * xvalue * values[i], picheight / 2 + y * yvalue * values[i]);
                outer.lineTo(picwidth / 2 + x * xvalue * values[i], picheight / 2 + y * yvalue * values[i]);
                y = (maxradius / 2 - (values[i]-1)*10) * Math.sin(2*Math.PI*(i+1.5)/values.length);
                x = (maxradius / 2 - (values[i]-1)*10) * Math.cos(2*Math.PI*(i+1.5)/values.length);
                inner.lineTo(picwidth / 2 + x * xvalue * values[i], picheight / 2 + y * yvalue * values[i]);
                outer.lineTo(picwidth / 2 + x * xvalue * values[i], picheight / 2 + y * yvalue * values[i]);
            /*
            *
            * todo: Junge hier alter, mach mal cooler!
            * Vorschlag zur Güte: zunächst von der Mitte aus, 2 Punkte auf Peripherie ansteuern und dann back too the mid.
            * Das ist ja wohl auch nicht schwer, gib mir mal Mühe Junge!
            *
             */
            }
            inner.closePath();
            inner.addTo(stage);
            outer.closePath();
            outer.addTo(stage);
        },
        width: 500,
        height: 480
        /*
         * todo: width and height need to be scalable at some point
         */
    });
}
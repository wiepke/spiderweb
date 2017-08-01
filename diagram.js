/**
 * Created by fides-WHK on 13.03.2017.
 */
function diagram(Kriterien, values, /*uni, course, */diacount) {
    mikro=(location.pathname.match('mikro')!==null);
    bonsai.run(document.getElementById('diagram'+diacount), {
        //uni: uni,
        mikrobool: mikro,
        Kriterien: Kriterien,
        values: values,
        //course: course,
        code: function () {
            let picwidth = 530;
            let picheight = 500;
            let maxradius=400;
            let uni = stage.options.uni;
            let Kriterien = stage.options.Kriterien;
            let mikrobool = stage.options.mikrobool;
            let values = stage.options.values;
            let course = stage.options.course;
            let y = 0.0;
            let x = 0.0;
            new Circle(picwidth / 2, picheight / 2, maxradius / 2 - 20)
                .addTo(stage)
                .stroke('lightgray', 3);
            new Circle(picwidth / 2, picheight / 2, maxradius / 2 - 74)
                .addTo(stage)
                .stroke('lightgray', 3);
            new Circle(picwidth / 2, picheight / 2, maxradius / 2 - 133)
                .addTo(stage)
                .stroke('lightgray', 3);
            /*just 3 gray circles so far*/
            let xvalue = 1/3;
            let yvalue = 1/3;
            let slidein=0;
            for (let i = 0; i < values.length; i++) {
                y = maxradius / 2 * Math.sin(2*Math.PI*(i+1)/values.length);
                x = maxradius / 2 * Math.cos(2*Math.PI*(i+1)/values.length);
                if (x<=0) slidein=-1;
                else slidein=0;
                new Text(Kriterien[i]).addTo(stage).attr({
                    fontFamily: 'Arial, sans-serif',
                    fontSize: '10',
                    textFillColor: 'black',
                    textStrokeColor: 'black',
                    textStrokeWidth: 0.5,
                    x: x+picwidth/2+slidein*(Kriterien[i].length*5),
                    y: y+picheight/2
                });
               /*
                * Point (x1,y1) is the center of the width and on the upper end
                * All following points circle in equal distances around the center
                */
                new Path()
                    .moveTo(picwidth / 2, picheight / 2)
                    .stroke('lightgray', 2)
                    .lineTo(x + picwidth / 2,picheight / 2 + y)
                    .closePath()
                    .addTo(stage).attr('strokeDash', 10);
            }
            /* one line for each dimension which shall be displayed
            new Text("Uni: "+uni).addTo(stage).attr({
                fontFamily: 'Arial, sans-serif',
                fontSize: '20',
                textFillColor: 'darkblue',
                textStrokeColor: 'black',
                textStrokeWidth: 1,
                x:20,
                y:20
            });
            new Text("Kurs: "+course).addTo(stage).attr({
                fontFamily: 'Arial, sans-serif',
                fontSize: '20',
                textFillColor: 'darkblue',
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
                .moveTo(x * xvalue * values[0] + picwidth / 2, picheight / 2 + y * yvalue * values[0]);
            /*
             * "inner" is the shadowed part of the graphic
             */
            let outer = new Path()
                .moveTo(x * xvalue * values[0] + picwidth / 2, picheight / 2 + y * yvalue * values[0]);
            if(mikrobool) {
                outer.stroke('rgba(200,80,40,2)', 3);
                inner.fill(gradient.radial(['transparent', 'rgb(255,10,10)'], 200, 50, 50));
            }
            else{
                outer.stroke('rgba(50,150,10,2)', 3);
                inner.fill(gradient.radial(['transparent', 'rgb(10,255,10)'], 200, 50, 50));
            }
            /*
             * "outer" is the darkgreen line connecting the values
             */
            let apprlimit=20;
            for (let i=0; i<values.length;i++) {
                for (let appr=0; appr<apprlimit;appr++){
                    y = (maxradius / 2 - (values[i]-1)*10) * Math.sin(2*Math.PI*(i+0.5+appr/apprlimit)/values.length);
                    x = (maxradius / 2 - (values[i]-1)*10) * Math.cos(2*Math.PI*(i+0.5+appr/apprlimit)/values.length);
                    inner.lineTo(picwidth / 2 + x * xvalue * values[i], picheight / 2 + y * yvalue * values[i]);
                    outer.lineTo(picwidth / 2 + x * xvalue * values[i], picheight / 2 + y * yvalue * values[i]);
                }
            }
            inner.closePath();
            inner.addTo(stage);
            outer.closePath();
            outer.addTo(stage);
            new Text('0').addTo(stage).attr({
                fontFamily: 'Arial, sans-serif',
                fontSize: '10',
                textFillColor: 'black',
                textStrokeColor: 'black',
                textStrokeWidth: 1,
                x: picwidth/2 - 14,
                y: picheight/2 - 2
            });
            new Text('1').addTo(stage).attr({
                fontFamily: 'Arial, sans-serif',
                fontSize: '10',
                textFillColor: 'black',
                textStrokeColor: 'black',
                textStrokeWidth: 1,
                x: picwidth/2 - 15,
                y: picheight/2 - 65
            });
            new Text('2').addTo(stage).attr({
                fontFamily: 'Arial, sans-serif',
                fontSize: '10',
                textFillColor: 'black',
                textStrokeColor: 'black',
                textStrokeWidth: 1,
                x: picwidth/2 - 15,
                y: picheight/2 - 126
            });
            new Text('3').addTo(stage).attr({
                fontFamily: 'Arial, sans-serif',
                fontSize: '10',
                textFillColor: 'black',
                textStrokeColor: 'black',
                textStrokeWidth: 1,
                x: picwidth/2 - 15,
                y: picheight / 2 - 180,
            });
            /* label on each circle. "0" to "3" */
        },
        width: 530,
        height: 480
        /*
         * todo: width and height need to be scalable at some point
         */
    });
}
/**
 * Created by fides-WHK on 13.03.2017.
 */
function diagram(latestDiagram, background) {
    let Kriterien = latestDiagram.Kriterien;
    let values = latestDiagram.values;
    let diacount = latestDiagram.diacount;
    if (background){
        let model = document.createElement("IMG");
        if (Kriterien.length===7){
            if (document.cookie.match('en')!==null){
                model.src = "img/mikro-en.png";
            }else model.src = "img/mikro-de.png";
            document.getElementById("background0").appendChild(model);
        }else{
            if (document.cookie.match('en')!==null){
                model.src = "img/meso-en.png";
            }else model.src = "img/meso-de.png";
            document.getElementById("background1").appendChild(model);
        }
    }
    bonsai.run(document.getElementById('diagram'+diacount), {
        background:background,
        Kriterien: Kriterien,
        values: values,
        code: function () {
            let picwidth = 380;//530;
            let picheight = 380;//500;
            let maxradius = 426;//400;
            let Kriterien = stage.options.Kriterien;
            let background = stage.options.background;
            let values = stage.options.values;
            let y = 0.0;
            let x = 0.0;
            if (!background){
                if (Kriterien.length===7){
                    new Circle(picwidth / 2, picheight / 2, maxradius / 4.4 - 2)
                        .addTo(stage)
                        .stroke('lightgray', 3.9);
                    new Circle(picwidth / 2, picheight / 2, maxradius / 3.6 - 2)
                        .addTo(stage)
                        .stroke('lightgray', 3.9);
                    new Circle(picwidth / 2, picheight / 2, maxradius / 3 -2)
                        .addTo(stage)
                        .stroke('lightgray', 3.9);
                } else {
                    new Circle(picwidth / 2, picheight / 2, maxradius / 3.6)
                        .addTo(stage)
                        .stroke('lightgray', 3.9);
                    new Circle(picwidth / 2, picheight / 2, maxradius / 3 - 2)
                        .addTo(stage)
                        .stroke('lightgray', 3.9);
                    new Circle(picwidth / 2, picheight / 2, maxradius / 2.7 + 1)
                        .addTo(stage)
                        .stroke('lightgray', 3.9);
                }

                /*just 3 gray circles so far. The inner cirlce of the micro-level is exchanged for the outer circle in the meso level*/
            }
            if (!background) {
                let slidein=0;
                for (let i = 0; i < values.length; i++) {
                    if (Kriterien.length===7) {
                        y = maxradius / 2.7 * Math.sin(2 * Math.PI * (i + 0.5) / values.length);
                        x = maxradius / 2.7 * Math.cos(2 * Math.PI * (i + 0.5) / values.length);
                    }else {
                        y = maxradius / 2.3 * Math.sin(2 * Math.PI * (i + 0.5) / values.length);
                        x = maxradius / 2.3 * Math.cos(2 * Math.PI * (i + 0.5) / values.length);
                    }

                    if (x <= 0) slidein = -1;
                    else slidein = 0;
                    new Text(Kriterien[i]).addTo(stage).attr({
                        fontFamily: 'Arial, sans-serif',
                        fontSize: '10',
                        textFillColor: 'black',
                        textStrokeColor: 'black',
                        textStrokeWidth: 0.5,
                        x: x + picwidth / 2 + slidein * (Kriterien[i].length * 5),
                        y: y + picheight / 2
                    });
                }
            }
            let yvalue = 1/3;
            for (let i = 0; i < values.length; i++) {
                /*
                 * Point (x1,y1) is the center of the width and on the upper end
                 * All following points circle in equal distances around the center
                 */
                y = maxradius / 2.5 * Math.sin(2*Math.PI*(i+1)/values.length);
                x = maxradius / 2.5 * Math.cos(2*Math.PI*(i+1)/values.length);
                new Path()
                    .moveTo(picwidth / 2, picheight / 2)
                    .stroke('lightgray', 2.4)
                    .lineTo(x + picwidth / 2,picheight / 2 + y)
                    .closePath()
                    .addTo(stage).attr('strokeDash', 10);
            }
            /* one line for each dimension which shall be displayed*/

            /*
             * The basic picture (circles and dimensions) is done now
             * The length of "Kriterien" is variable.
             * dimension values on the rim.
             */
            let dimensionValue=0;
            if (Kriterien.length===7){
                if (values[0]==="3") dimensionValue=maxradius / 5.8;
                if (values[0]==="2") dimensionValue=maxradius / 4.4;
                if (values[0]==="1") dimensionValue=maxradius / 3.6;
                if (values[0]==="0") dimensionValue=maxradius / 2;
            } else {
                if (values[0]==="3") dimensionValue=maxradius / 8;
                if (values[0]==="2") dimensionValue=maxradius / 5.8;
                if (values[0]==="1") dimensionValue=maxradius / 4.5;
                if (values[0]==="0") dimensionValue=maxradius / 2;
            }
            x = (maxradius / 2 - dimensionValue);
            y=0;
            let inner = new Path()
                .moveTo(x + picwidth / 2, picheight / 2 + y * yvalue * values[0]);
            /*
             * "inner" is the shadowed part of the graphic
             */
            let outer = new Path()
                .moveTo(x + picwidth / 2, picheight / 2 + y * yvalue * values[0]);
            if(Kriterien.length===7) {
                outer.stroke('rgba(200,80,40,2)', 3.3);
                inner.fill(gradient.radial(['transparent', 'rgb(255,10,10)'], 200, 50, 50));
            }
            else{
                outer.stroke('rgba(50,150,10,2)', 3.3);
                inner.fill(gradient.radial(['transparent', 'rgb(10,255,10)'], 200, 50, 50));
            }
            /*
             * "outer" is the orange line connecting the values
             */
            let apprlimit=20;
            for (let i=0; i<values.length;i++) {
                for (let appr=0; appr<apprlimit+1;appr++){
                    if (Kriterien.length===7){
                        if (values[i]==="3") dimensionValue=maxradius / 5.8;
                        if (values[i]==="2") dimensionValue=maxradius / 4.4;
                        if (values[i]==="1") dimensionValue=maxradius / 3.6;
                        if (values[i]==="0") dimensionValue=maxradius / 2;
                    } else {
                        if (values[i]==="3") dimensionValue=maxradius / 8;
                        if (values[i]==="2") dimensionValue=maxradius / 5.8;
                        if (values[i]==="1") dimensionValue=maxradius / 4.5;
                        if (values[i]==="0") dimensionValue=maxradius / 2;
                    }
                    y = (maxradius / 2 - dimensionValue) * Math.sin(2*Math.PI*(i+appr/apprlimit)/values.length);
                    x = (maxradius / 2 - dimensionValue) * Math.cos(2*Math.PI*(i+appr/apprlimit)/values.length);
                    inner.lineTo(picwidth / 2 + x, picheight / 2 + y);
                    outer.lineTo(picwidth / 2 + x, picheight / 2 + y);
                }
            }
            inner.closePath();
            inner.addTo(stage);
            outer.closePath();
            outer.addTo(stage);
            if (!background){
                if (Kriterien.length===7) {
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
                        y: picheight/2 - 95
                    });
                    new Text('2').addTo(stage).attr({
                        fontFamily: 'Arial, sans-serif',
                        fontSize: '10',
                        textFillColor: 'black',
                        textStrokeColor: 'black',
                        textStrokeWidth: 1,
                        x: picwidth/2 - 15,
                        y: picheight/2 - 115
                    });
                    new Text('3').addTo(stage).attr({
                        fontFamily: 'Arial, sans-serif',
                        fontSize: '10',
                        textFillColor: 'black',
                        textStrokeColor: 'black',
                        textStrokeWidth: 1,
                        x: picwidth/2 - 15,
                        y: picheight / 2 - 138,
                    });
                }else {
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
                        y: picheight/2 - 115
                    });
                    new Text('2').addTo(stage).attr({
                        fontFamily: 'Arial, sans-serif',
                        fontSize: '10',
                        textFillColor: 'black',
                        textStrokeColor: 'black',
                        textStrokeWidth: 1,
                        x: picwidth/2 - 15,
                        y: picheight/2 - 142
                    });
                    new Text('3').addTo(stage).attr({
                        fontFamily: 'Arial, sans-serif',
                        fontSize: '10',
                        textFillColor: 'black',
                        textStrokeColor: 'black',
                        textStrokeWidth: 1,
                        x: picwidth/2 - 15,
                        y: picheight / 2 - 162,
                    });
                }

                /* label on each circle. "0" to "3" */
            }
        },
        width: 380,//480,
        height: 380//480
        /*
         * todo: width and height need to be scalable at some point
         */
    });
}
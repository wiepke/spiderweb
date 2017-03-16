/**
 * Created by fides-WHK on 13.03.2017.
 */
function diagram(a, b, c, d, e, f, g, h) {
    //alert("oeffentlichkeit =" +a+ "; Bewertung =" +b+ "; inquiry =" +c+ "; tasks =" +d+ "; question =" +e+ "; topic =" +f+ "; negotiable =" +a+ "; knowledgebuilding =" +h);
    bonsai.run(document.getElementById('diagram'), {
        code: function () {
            let picwidth = 500;
            let picheight = 400;
            let maxradius;
            let a=Math.round(Math.random()*2+1);
            let b=Math.round(Math.random()*2+1);
            let c=Math.round(Math.random()*2+1);
            let d=Math.round(Math.random()*2+1);
            let e=Math.round(Math.random()*2+1);
            let f=Math.round(Math.random()*2+1);
            let g=Math.round(Math.random()*2+1);
            let h=Math.round(Math.random()*2+1);
            /*
             * todo: Parameter müssen von außen übergeben werden, hier ist nur die Testlösung.
             */
            if (picwidth < picheight)
                maxradius = picwidth;
            else maxradius = picheight;
            let Kriterien = [a, b, c, d, e, f, g, h];
            new Circle(picwidth / 2, picheight / 2, maxradius / 2 - 20)
                .addTo(stage)
                .stroke('red', 3);
            new Circle(picwidth / 2, picheight / 2, maxradius / 2 - 75)
                .addTo(stage)
                .stroke('red', 3);
            new Circle(picwidth / 2, picheight / 2, maxradius / 2 - 130)
                .addTo(stage)
                .stroke('red', 3);
            let xvalue = 1/3;
            let yvalue = 1/3;
            let sign = 1;
            let y = (maxradius / 2 + picheight / 2) * (1 / 2 + Math.tan((0) / 2.15681043225));
            let x = 0.0;
            for (let i = 0; i < Kriterien.length; i++) {
                y = maxradius / 2 * Math.sin(2*Math.PI*(i+1)/Kriterien.length);
                x = maxradius / 2 * Math.cos(2*Math.PI*(i+1)/Kriterien.length);
                new Path()
                    .moveTo(picwidth / 2, picheight / 2)
                    .stroke('gray', 2)
                    .lineTo(x + picwidth / 2,picheight / 2 + y)
                    .closePath()
                    .addTo(stage);
            }
            /*
             * Das Rohdiagramm ist nun fertig
             * Durch Veränderung der Kriterienliste ändert sich auch das Diagram
             * todo: Kriteriennamen am Rand.
             */
            if (maxradius / 2 * maxradius / 2 - (y - picheight / 2) * (y - picheight / 2) <= 0)
                sign = -1;
            else
                sign = 1;
            y = (maxradius / 2 - (Kriterien[0]-1)*10) * Math.sin(2*Math.PI/Kriterien.length);
            x = (maxradius / 2 - (Kriterien[0]-1)*10) * Math.cos(2*Math.PI/Kriterien.length);
            let inner = new Path()
                .moveTo(x * xvalue * Kriterien[0] + picwidth / 2, picheight / 2 + y * yvalue * Kriterien[0])
                .fill(gradient.radial(['transparent', 'black'], 200, 50, 50));
            let outer = new Path()
                .moveTo(x * xvalue * Kriterien[0] + picwidth / 2, picheight / 2 + y * yvalue * Kriterien[0])
                .stroke('black', 4);
            for (let i=0; i<Kriterien.length;i++) {
                y = (maxradius / 2 - (Kriterien[i]-1)*10) * Math.sin(2*Math.PI*(i+1)/Kriterien.length);
                x = (maxradius / 2 - (Kriterien[i]-1)*10) * Math.cos(2*Math.PI*(i+1)/Kriterien.length);
                inner.lineTo(picwidth / 2 + x * xvalue * Kriterien[i], picheight / 2 + y * yvalue * Kriterien[i]);
                outer.lineTo(picwidth / 2 + x * xvalue * Kriterien[i], picheight / 2 + y * yvalue * Kriterien[i]);
            }
            inner.closePath();
            inner.addTo(stage);
            outer.closePath();
            outer.addTo(stage);
        },
        width: 500,
        height: 400
    });
}
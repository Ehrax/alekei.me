import { Create, CanvasSpace, Circle, Const, Form, Group, Pt, Line } from 'pts';

export let space;

export function animatedSpace() {
    space = new CanvasSpace('#pt').setup({ bgcolor: 'hsl(220, 13%, 18%)' });
    let form = space.getForm();

    let pts = new Group();

    let divideRatio =  window.innerWidth <= 600 ? 1
        : window.innerWidth <= 960 ? 2
        : window.innerWidth <= 1400 ? 3
        : 4;

    space.add({
        start: (bound) => {
            let count = window.innerWidth * 0.12;
            if (count > 150) count = 150;
            pts = Create.distributeRandom(space.innerBound, count);
        }, 
        animate: (time, ftime) => {
            const x = space.center.x;
            let perpendTop = new Group(new Pt(x, 0) , new Pt(0, 0)).op(Line.perpendicularFromPt);
            let perpendBottom = new Group(new Pt(x, space.height), new Pt(0, space.height)).op(Line.perpendicularFromPt);

            let pointer = Circle.fromCenter(space.pointer, 25);

            pts.forEach((p, i) => {
                p.rotate2D(Const.one_degree / 25, space.center);
                let lpTop = perpendTop(p);
                let lpBottom = perpendBottom(p);
                
                let topLine = new Group(p, lpTop);
                let bottomLine = new Group(p, lpBottom);
                
                let ratioTop = Math.min(0.3, 1 - lpTop.$subtract(p).magnitude()/(space.size.x/divideRatio));
                let ratioBottom = Math.min(0.3, 1 - lpBottom.$subtract(p).magnitude()/(space.size.x/divideRatio) );

                form.stroke(`rgba(255,255,255,${ratioTop})`).line(topLine);
                form.stroke(`rgba(255,255,255,${ratioBottom})`).line(bottomLine);
                form.fillOnly(['hsl(207, 82%, 66%)', 'hsl(355, 65%, 65%)', 'hsl(39, 67%, 69%)'][i%3]).point(p, 1, 'circle');
            });
        }
    });

    space.play().bindTouch().bindMouse();
}
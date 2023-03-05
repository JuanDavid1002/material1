TweenMax.set('#motoSVG', { visibility:'visible', x:"200px" });

    function lineReset() {
      TweenMax.set(".roadLine", {x:"0px"})
    }


var motoRide = new TimelineMax({repeat: -1 });

motoRide.to(".roadLine", .85, {x:"300px", ease:Power0.easeInOut }, "accelerate")
    .to(".roadLine", .4, {x:"600px", ease:Power0.easeInOut })
    .to(".roadLine", .3, {x:"900px", ease:Power0.easeInOut })
    .to(".roadLine", .25, {x:"1200px", ease:Power0.easeInOut, onComplete:lineReset })
    .to(".roadLine", .22, {x:"300px", ease:Power0.easeInOut})
    .to(".roadLine", .2, {x:"600px", ease:Power0.easeInOut})
    .to(".roadLine", .18, {x:"900px", ease:Power0.easeInOut })
    .to(".roadLine", .15, {x:"1200px", ease:Power0.easeInOut, onComplete:lineReset })
    .to(".roadLine", .6, {x:"1200px", ease:Power0.easeInOut, onComplete:lineReset, repeat:2 })
    .to(".roadLine", .5, {x:"1200px", ease:Power0.easeInOut, onComplete:lineReset,repeat:4 })
    .to(".roadLine", .4, {x:"1200px", ease:Power0.easeInOut, onComplete:lineReset, repeat:6})
    .to(".roadLine", .3, {x:"1200px", ease:Power0.easeInOut, onComplete:lineReset, repeat:8 })
    .to(".roadLine", .25, {x:"1200px", ease:Power0.easeInOut, onComplete:lineReset, repeat:5 })
    .to(".roadLine", .2, {x:"1200px", ease:Power0.easeInOut, onComplete:lineReset })
    .to(".roadLine", .35, {x:"1200px", ease:Power0.easeInOut, onComplete:lineReset, repeat:8 }, "slow")
    .to(".roadLine", .4, {x:"1200px", ease:Power0.easeInOut, onComplete:lineReset, repeat:3})
    .to(".roadLine", .5, {x:"1200px", ease:Power0.easeInOut, onComplete:lineReset })
    .to(".roadLine", .2, {x:"300px", ease:Power0.easeInOut })
    .to(".roadLine", .3, {x:"600px", ease:Power0.easeInOut })
    .to(".roadLine", .4, {x:"900px", ease:Power0.easeInOut })
    .to(".roadLine", .6, {x:"1200px", ease:Power0.easeInOut })
    .to(".roadLine", 1, {x:"1200px", ease:Power0.easeInOut, onComplete:lineReset })
    .to("#front_wheel", 12, {rotation: "+=12960_ccw", ease: Power1.easeIn, transformOrigin:"50% 50%" }, "accelerate")
    .to("#back_wheel", 12, {rotation: "+=12960_ccw", ease: Power1.easeIn, transformOrigin:"50% 50%" }, "accelerate")
    .to("#engine", 0.05, { y:'-=2.5', repeat:410, yoyo:true }, "accelerate")
    .to("#exhaust", 0.05, { rotation:0.8, repeat:410, yoyo:true, transformOrigin:"left bottom" }, "accelerate")
    .to("#motoSVG", 8, {x:"-200px", ease:Back.easeInOut}, "accelerate+=3")
    .to("#chain1", .3, { x:"-20px", repeat:66, ease:Power0.easeInOut }, "accelerate")
    .to("#chain2", .3, { x:"-20px", repeat:66, ease:Power0.easeInOut }, "accelerate")
    .to("#chain3", .6, { x:"-40px", repeat:33, ease:Power0.easeInOut }, "accelerate")
    .to("#chain4", .6, { x:"-40px", repeat:33, ease:Power0.easeInOut }, "accelerate")
    .to("#frontShock", 0.05, { scaleY:0.96, rotation:-0.5, transformOrigin:"right top", repeat:410, yoyo:true }, "accelerate")
    .to("#rearShock", 0.05, { scaleY:0.97, rotation:0.8, transformOrigin:"left top", repeat:410, yoyo:true}, "accelerate")
    .to("#front_wheel", 9, {rotation: "+=9720_ccw", ease: Power2.easeOut, transformOrigin:"50% 50%" }, "slow-=1.9")
    .to("#back_wheel", 9, {rotation: "+=9720_ccw", ease: Power2.easeOut, transformOrigin:"50% 50%" }, "slow-=1.9")
    .to("#motoSVG", 5, {x:"200px", ease:Power1.easeInOut}, "slow+=1")
  
    $(document).ready(function() {
      $('.has-animation').each(function(index) {
        $(this).delay($(this).data('delay')).queue(function(){
          $(this).addClass('animate-in');
        });
      });
    });
;

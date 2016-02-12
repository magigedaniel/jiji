jQuery.fn.badge = function(options) {
            var dt = new Date();
            var defaults = {
                link:"javascript:void(0);",
                startDate: dt,
                endDate: dt,               
                html: "<p>Event</p>",
                imageUrl: ""
            };

            var opts = $.extend({}, defaults, options);
            
            var cDate = new Date();
            var sDate = new Date(opts.startDate);
            var eDate = new Date(opts.endDate);  
            
            var dts = {"cDate":cDate,"sDate":sDate,"eDate":eDate};
            for(dt in dts){
                var tmp = dts[dt];
                tmp = tmp.setHours(0,0,0,0);
                tmp = new Date(tmp);
                window[dt] = tmp;                
            }            
            
            return this.each(function() {                
                if(sDate <= cDate && eDate >= cDate ){
                    if ($(window).width() > 767) {                    
                        var anchor = jQuery('<a/>', {                            
                            class: 'badge clear bgTbl',
                            href: opts.link,                            
                            html: "<div class='badgeTxt td'>"+opts.html+"</div><div class='td'><img src='images/mas-face.png' /></div>"
                        }).appendTo(this);                                                
                        
                        $(".badge").css('display','table');
                        $(".badge").hover(function() {
                            $(this).animate({"left": '0'}, 0);
                        }, function() {
                            $(this).animate({"left": '-308px'}, 0); 
                        });                   
                    }

                    $(".resbadge").click(function() {
                        $(".badge").show();
                    });

                    if ($(window).width() < 767) {
                        $(".badge").click(function() {
                            $(this).hide();
                        });
                    }
                }
                else
                {
                    $(".badge").remove();
                }
            });
        };
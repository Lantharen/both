/****************************************************************
 Report Styles (from sec.gov)
 ****************************************************************/
/* Updated 2009-11-04 */
/* v2.2.0.24 */

/* DefRef Styles */
.
report
table.authRefData
{
    background - color
:
    #def;
    border: 2
    px
    solid
#
    2
    F4497;
    font - size
:
    1
    em;
    position: absolute;
}

.
report
table.authRefData
a
{
    display: block;
    font - weight
:
    bold;
}

.
report
table.authRefData
p
{
    margin - top
:
    0
    px;
}

.
report
table.authRefData.hide
{
    background - color
: #
    2
    F4497;
    padding: 1
    px
    3
    px
    0
    px
    0
    px;
    text - align
:
    right;
}

.
report
table.authRefData.hide
a:hover
{
    background - color
: #
    2
    F4497;
}

.
report
table.authRefData.body
{
    height: 150
    px;
    overflow: auto;
    width: 400
    px;
}

.
report
table.authRefData
table
{
    font - size
:
    1
    em;
}

/* Report Styles */
.
pl
a,
.
pl
a:visited
{
    color: black;
    text - decoration
:
    none;
}

/* table */
.
report
{
    background - color
:
    white;
    border: 2
    px
    solid
    #acf;
    clear: both;
    color: black;
    font: normal
    8
    pt
    Helvetica, Arial, san - serif;
    margin - bottom
:
    2
    em;
}

.
report
hr
{
    border: 1
    px
    solid
    #acf;
}

/* Top labels */
.
report
th
{
    background - color
:
    #acf;
    color: black;
    font - weight
:
    bold;
    text - align
:
    center;
}

.
report
th.void
{
    background - color
:
    transparent;
    color: #
    000000;
    font: bold
    10
    pt
    Helvetica, Arial, san - serif;
    text - align
:
    left;
}

.
report.pl
{
    text - align
:
    left;
    vertical - align
:
    top;
    white - space
:
    normal;
    /*	width: 200px;*/
    word - wrap
:
    break
    -word;
}

.
report
td.pl
a.a
{
    cursor: pointer;
    display: block;
    /*	width: 200px;*/
}

.
report
td.pl
div.a
{
    /*width: 200px;*/
}

.
report
td.pl
a:hover
{
    background - color
:
    #ffc;
}

/* Header rows... */
.
report
tr.rh
{
    background - color
:
    #acf;
    color: black;
    font - weight
:
    bold;
}

/* Calendars... */
.
report.rc
{
    background - color
:
    #f0f0f0;
}

/* Even rows... */
.
report.re,
.
report.reu
{
    background - color
:
    #def;
}

.
report.reu
td
{
    border - bottom
:
    1
    px
    solid
    black;
}

/* Odd rows... */
.
report.ro,
.
report.rou
{
    background - color
:
    white;
}

.
report.rou
td
{
    border - bottom
:
    1
    px
    solid
    black;
}

.
report.rou
table
td,
.
report.reu
table
td
{
    border - bottom
:
    0
    px
    solid
    black;
}

/* styles for footnote marker */
.
report.fn
{
    white - space
:
    nowrap;
}

/* styles for numeric types */
.
report.num,
.
report.nump
{
    text - align
:
    right;
    white - space
:
    nowrap;
}

.
report.nump
{
    padding - left
:
    2
    em;
}

.
report.nump
{
    padding: 0
    px
    0.4
    em
    0
    px
    2
    em;
}

/* styles for text types */
.
report.text
{
    text - align
:
    left;
    white - space
:
    normal;
}

.
report.text.big
{
    margin - bottom
:
    1
    em;
    width: 17
    em;
}

.
report.text.more
{
    display: none;
}

.
report.text.note
{
    font - style
:
    italic;
    font - weight
:
    bold;
}

.
report.text.small
{
    width: 10
    em;
}

.
report
sup
{
    font - style
:
    italic;
}

.
report.outerFootnotes
{
    font - size
:
    1
    em;
}


/****************************************************************
 Left Menu
 ****************************************************************/
#xbrl - menu - left
:
after
{
    content: '.';
    display: block;
    overflow: hidden;
    visibility: hidden;
    width: 0;
    height: 0;
}

#xbrl - menu - left.navigation
{
    float: left;
    width: 20 %;
}

#xbrl - menu - left
a.menu - item
{
    padding: 7
    px
    8
    px;
    display: block;
    border - bottom - width
:
    1
    px;
    border - bottom - style
:
    solid;
}

#xbrl - menu - left
ul.menu
li:first - child
{
    border - top
:
    none;
}


#xbrl - menu - left
ul.menu
{
    padding: 0;
    margin: 0;
    border - width
:
    1
    px;
    border - style
:
    solid;
}

#xbrl - menu - left
ul
ul
{
    margin: 10
    px
    0;
    padding: 0
    0
    0
    25
    px;
}

#xbrl - menu - left.menu
li
{
    border - top - width
:
    1
    px;
    border - top - style
:
    solid;
    padding: 0;
    margin: 0;
    list - style - type
:
    none;
    font - size
:
    13
    px;
}

#xbrl - menu - left
ul.menu
li
li
{
    margin: 0
    0
    10
    px
    0;
    padding: 0;
    border - top
:
    none;
    list - style - type
:
    square;
    color: #
    999;
    font - size
:
    12
    px;
}

.
spr - xbrl - document
{
    float: left;
    width: 80 %;
}

#xbrl - menu - left
table
{
    width: 98 %;
    background: #fff;
    margin - left
:
    15
    px;
}

#xbrl - menu - left
td
{
    padding: 5
    px
    10
    px;
    border - top - width
:
    1
    px;
    border - top - style
:
    solid;
    border - right - width
:
    1
    px;
    border - right - style
:
    solid;
}

#xbrl - menu - left
th
{
    padding: 7
    px
    8
    px;
    border - right - width
:
    1
    px;
    border - right - style
:
    solid;
    text - align
:
    left;
    font - size
:
    13
    px;
}

#xbrl - menu - left
td:last - child,
#xbrl - menu - left
th:last - child
{
    border - right
:
    none;
}

#xbrl - menu - left
table.report
{
    border - width
:
    1
    px;
    border - style
:
    solid;
}


/****************************************************************
 Top Menu
 ****************************************************************/

#xbrl - menu - top.navigation
:
after
{
    content: '.';
    display: block;
    overflow: hidden;
    visibility: hidden;
    width: 0;
    height: 0;
}

#xbrl - menu - top
a.menu - item
{
}

#xbrl - menu - top
ul.menu
li:first - child
{
}

#xbrl - menu - top
ul.menu
{
}

#xbrl - menu - top
ul
ul
{
}

#xbrl - menu - top.menu
li
{
    display: inline;
}

#xbrl - menu - top
ul.menu
li
li
{
    display: block;
}

#xbrl - menu - top.content
{
}

#xbrl - menu - top
table
{
    width: 100 %;
    background: #fff;
}

#xbrl - menu - top
td
{
    padding: 5
    px
    10
    px;
    border - top - width
:
    1
    px;
    border - top - style
:
    solid;
    border - right - width
:
    1
    px;
    border - right - style
:
    solid;
}

#xbrl - menu - top
th
{
    padding: 7
    px
    8
    px;
    border - right - width
:
    1
    px;
    border - right - style
:
    solid;
    text - align
:
    left;
    font - size
:
    13
    px;
}

#xbrl - menu - top
td:last - child,
#xbrl - menu - top
th:last - child
{
    border - right
:
    none;
}

#xbrl - menu - top
table.report
{
    border - width
:
    1
    px;
    border - style
:
    solid;
}

/****************************************************************
 Superfish
 ****************************************************************/

/*** ESSENTIAL STYLES ***/
.
xbrl - sf - menu,
.
xbrl - sf - menu * {
    margin: 0;
    padding: 0;
    list-style
:
none;
}
.
xbrl - sf - menu
{
    line - height
:
    1.0;
}
.
xbrl - sf - menu
ul
{
    position:        absolute;
    top:            -999
    em;
    width:            300
    px; /* left offset of submenus need to match (see below) */
}
.
xbrl - sf - menu
ul
li
{
    width:            100 %;
}
.
xbrl - sf - menu
li:hover
{
    visibility:        inherit; /* fixes IE7 'sticky bug' */
}
.
xbrl - sf - menu
li
{
    float:            left;
    position:        relative;
}
.
xbrl - sf - menu
a
{
    display:        block;
    position:        relative;
}
.
xbrl - sf - menu
li:hover
ul,
.
xbrl - sf - menu
li.sfHover
ul
{
    left:            0;
    top:            2.5
    em; /* match top ul list item height */
    z - index
:
    99;
}
ul.xbrl - sf - menu
li:hover
li
ul,
ul.xbrl - sf - menu
li.sfHover
li
ul
{
    top:            -999
    em;
}
ul.xbrl - sf - menu
li
li:hover
ul,
ul.xbrl - sf - menu
li
li.sfHover
ul
{
    left:            10
    em; /* match ul width */
    top:            0;
}
ul.xbrl - sf - menu
li
li:hover
li
ul,
ul.xbrl - sf - menu
li
li.sfHover
li
ul
{
    top:            -999
    em;
}
ul.xbrl - sf - menu
li
li
li:hover
ul,
ul.xbrl - sf - menu
li
li
li.sfHover
ul
{
    left:            10
    em; /* match ul width */
    top:            0;
}

/*** DEMO SKIN ***/
.
xbrl - sf - menu
{
    float:            left;
}
.
xbrl - sf - menu
a
{
    padding:        0.75
    em
    0.75
    em;
    text - decoration
:
    none;
}

.
xbrl - sf - menu
li:hover,
.
xbrl - sf - menu
li.sfHover,
.
xbrl - sf - menu
a:focus,
.
xbrl - sf - menu
a:hover,
.
xbrl - sf - menu
a:active
{
    outline:        0;
}

/*** arrows **/
.
xbrl - sf - menu
a.sf -
with-ul {
    /*	padding-right: 	2.25em;*/
    min - width
:
    1
    px; /* trigger IE7 hasLayout so spans position accurately */
}
.
sf - sub - indicator
{
    position:        absolute;
    display:        block;
    right:            .75
    em;
    top:            1.05
    em; /* IE6 only */
    width:            10
    px;
    height:            10
    px;
    text - indent
:
    -999
    em;
    overflow:        hidden;
    background:        url('../images/arrows-ffffff.png')
    no - repeat - 10
    px - 100
    px; /* 8-bit indexed alpha png. IE6 gets solid image only */
}
a >
.
sf - sub - indicator
{  /* give all except IE6 the correct values */
    top:            .8
    em;
    background - position
:
    0 - 100
    px; /* use translucent arrow for modern browsers*/
}
/* apply hovers to modern browsers */
a:focus >
.
sf - sub - indicator,
    a
:
hover >
.
sf - sub - indicator,
    a
:
active >
.
sf - sub - indicator,
    li
:
hover > a >
.
sf - sub - indicator,
li.sfHover > a >
.
sf - sub - indicator
{
    background - position
:
    -10
    px - 100
    px; /* arrow hovers for modern browsers*/
}

/* point right for anchors in subs */
.
xbrl - sf - menu
ul.sf - sub - indicator
{
    background - position
:
    -10
    px
    0;
}
.
xbrl - sf - menu
ul
a >
.
sf - sub - indicator
{
    background - position
:
    0
    0;
}
/* apply hovers to modern browsers */
.
xbrl - sf - menu
ul
a:focus >
.
sf - sub - indicator,
.
xbrl - sf - menu
ul
a:hover >
.
sf - sub - indicator,
.
xbrl - sf - menu
ul
a:active >
.
sf - sub - indicator,
.
xbrl - sf - menu
ul
li:hover > a >
.
sf - sub - indicator,
.
xbrl - sf - menu
ul
li.sfHover > a >
.
sf - sub - indicator
{
    background - position
:
    -10
    px
    0; /* arrow hovers for modern browsers*/
}

/*** shadows for all but IE6 ***/
.
sf - shadow
ul
{
    background:    url('../images/shadow.png')
    no - repeat
    bottom
    right;
    padding: 0
    8
    px
    9
    px
    0;
    -moz - border - radius - bottomleft
:
    17
    px;
    -moz - border - radius - topright
:
    17
    px;
    -webkit - border - top - right - radius
:
    17
    px;
    -webkit - border - bottom - left - radius
:
    17
    px;
}
.
sf - shadow
ul.sf - shadow - off
{
    background: transparent;
}

/****************************************************************
 Neutral Skin
 ****************************************************************/
.
xbrl - content
a
{
    color: #
    0066
    cc;
    text - decoration
:
    none;
}

.
xbrl - content
a:hover
{
    text - decoration
:
    underline;
}

.
xbrl - content
thead
{
    background: #efefef; /* Old browsers */
    background: -moz - linear - gradient(top, #ffffff
    0 %, #e5e5e5
    100 %
)
    ; /* FF3.6+ */
    background: -webkit - gradient(linear, left
    top, left
    bottom, color - stop(0 %, #ffffff), color - stop(100 %, #e5e5e5)
)
    ; /* Chrome,Safari4+ */
    background: -webkit - linear - gradient(top, #ffffff
    0 %, #e5e5e5
    100 %
)
    ; /* Chrome10+,Safari5.1+ */
    background: -o - linear - gradient(top, #ffffff
    0 %, #e5e5e5
    100 %
)
    ; /* Opera11.10+ */
    background: -ms - linear - gradient(top, #ffffff
    0 %, #e5e5e5
    100 %
)
    ; /* IE10+ */
    filter: progid:DXImageTransform.Microsoft.gradient(startColorstr = '#ffffff', endColorstr = '#e5e5e5', GradientType = 0); /* IE6-9 */
    background: linear - gradient(top, #ffffff
    0 %, #e5e5e5
    100 %
)
    ; /* W3C */
}

.
xbrl - content
th
{
    border - top - color
:
    #e3e3e3;
    border - right - color
:
    #e3e3e3;
}

.
xbrl - content
td
{
    border - top - color
:
    #e3e3e3;
    border - right - color
:
    #e3e3e3;
}

.
xbrl - content
th
{
    text - shadow
:
    0
    px
    1
    px
    0
    px
    #fff;
    filter: dropshadow(color = #fff, offx = 0, offy = 1);
    color: #
    333;
}

.
xbrl - content
tr.alt
td
{
    background - color
:
    #f3f9fe;
}

.
xbrl - content
table.report
{
    border - color
:
    #e3e3e3;
}

.
xbrl - content
ul.menu
{
    border - color
:
    #e3e3e3;
}

.
xbrl - content
ul.menu
li
{
    border - top - color
:
    #e3e3e3;
}

.
xbrl - content
ul.menu
a.menu - item
{
    border - top - color
:
    #e3e3e3;
    text - shadow
:
    0
    px
    1
    px
    0
    px
    #fff;
    filter: dropshadow(color = #fff, offx = 0, offy = 1);
}

.
xbrl - content
a.menu - item.current
{
    font - weight
:
    bold;
}

.
xbrl - content
a.menu - item
{
    background: #efefef; /* Old browsers */
    background: -moz - linear - gradient(top, #ffffff
    0 %, #e5e5e5
    100 %
)
    ; /* FF3.6+ */
    background: -webkit - gradient(linear, left
    top, left
    bottom, color - stop(0 %, #ffffff), color - stop(100 %, #e5e5e5)
)
    ; /* Chrome,Safari4+ */
    background: -webkit - linear - gradient(top, #ffffff
    0 %, #e5e5e5
    100 %
)
    ; /* Chrome10+,Safari5.1+ */
    background: -o - linear - gradient(top, #ffffff
    0 %, #e5e5e5
    100 %
)
    ; /* Opera11.10+ */
    background: -ms - linear - gradient(top, #ffffff
    0 %, #e5e5e5
    100 %
)
    ; /* IE10+ */
    filter: progid:DXImageTransform.Microsoft.gradient(startColorstr = '#ffffff', endColorstr = '#e5e5e5', GradientType = 0); /* IE6-9 */
    background: linear - gradient(top, #ffffff
    0 %, #e5e5e5
    100 %
)
    ; /* W3C */
    border - bottom - color
:
    #e3e3e3;
}

.
xbrl - content.xbrl - sf - menu
a
{
    border - left
:
    1
    px
    solid
    #fff;
}

.
xbrl - content.xbrl - sf - menu
a,
.
xbrl - sf - menu
a:visited
{ /* visited pseudo selector so IE6 applies text colour*/
    color:            #
    333;
}
.
xbrl - content.xbrl - sf - menu
li
{
    background:        #e3e3e3;
}
.
xbrl - content.xbrl - sf - menu
li
li
{
    background:        #efefef;
}
.
xbrl - content.xbrl - sf - menu
li
li
li
{
    background:        #e3e3e3;
}
.
xbrl - content.xbrl - sf - menu
li:hover,
.
xbrl - sf - menu
li.sfHover,
.
xbrl - content.xbrl - sf - menu
a:focus,
.
xbrl - sf - menu
a:hover,
.
xbrl - sf - menu
a:active
{
    background:        #e3e3e3;
}

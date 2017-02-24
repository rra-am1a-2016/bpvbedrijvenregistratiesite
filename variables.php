<div class="page-header">
        <h1>Het gebruik van variabelen met LESS</h1>
</div>
<p class="lead">
<p>Met LESS kun je gebruik maken van variabelen. Hieronder staat een voorbeeld</p>
  <code>
     <pre>
@color: #0000FF + #00FF00 + #110000;
@borderWidth: 20 + 30;
@unit: em;

#content
{
  border: ~"@{borderWidth}@{unit}" solid @color;
};
    </pre>
  </code>
<p>De onderstaande div heeft opmaak die is gemaakt met 7 LESS variabelen @colorText,
@borderWidth, @borderRadius, @backgroundColor, @fontSize, @width en @height.</p>
</p>

<code>
  <pre>
@borderColor: darken(@backgroundColor, 20%);
@borderThickness: 4;
@lineStyle: solid;
@width: 50%;
@height: 100px;
@backgroundColor: rgba(220, 220, 220, 1.0);
@color: lighten(@backgroundColor, 60%);
@padding: 0.8em;
@font_extension: family;


#divLessOpmaak
{
  border: ~"@{borderThickness}px" @lineStyle @borderColor;
  width: @width;
  height: @height;
  background-color: @backgroundColor;
  color: @color;
  padding: @padding;
  font-family: "Verdana";
}

  </pre>
</code>



<div id="divLessOpmaak">
    Dit is een div waarvan de css properties zijn ingesteld met LESS
</div>


<hr>
<hr>

<p>We gaan nu een basale mixin maken met parameter</p>
<p>Opdracht: maak een div waarvan de opmaak geregeld wordt door een mixin met parameters</p>

<div id="paraMixin">
  Dit is een div waarvan de opmaak wordt geregeld door een mixin met parameters
</div>




<div class="page-header">
        <h1>Het gebruik van mixins met LESS</h1>
</div>
<p class="lead">
<p>Met LESS kun je gebruik maken van mixins. Dit zijn een soort van functies binnen Less
   Hieronder staat een voorbeeld
</p>
  




<p>We gaan nu een basale mixin maken met parameter</p>
<p>Maak een div waarvan de opmaak geregeld wordt door een mixin met parameters</p>

<code>
<pre>
// Dit is de mixin
.opmaakDiv(@thickness: 5, @pxOrEm: px, @borderStyle: solid, @borderColor: black)
{
  border:~"@{thickness}@{pxOrEm}" @borderStyle @borderColor;
  @newValue: 4 * @thickness;
  padding: ~"@{newValue}@{pxOrEm}";

}

// Hier wordt de mixin aangeroepen door een div#paraMixin
#paraMixin
{
  /*
  .opmaakDiv(0.2, em, dashed, rgb(200, 200, 20));
  */
  .opmaakDiv;
}
</pre>
</code>

<div id="paraMixin">
  div#paraMixin
</div>




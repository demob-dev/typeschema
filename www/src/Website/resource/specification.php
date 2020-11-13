
<?php include __DIR__ . '/inc/header.php'; ?>

<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item active" aria-current="page"><a href="<?php echo $url; ?>">TypeSchema</a> / Specification</li>
  </ol>
</nav>

<div class="container">

  <h1>Specification</h1>

  <p>In TypeSchema our main specification is the <a href="https://github.com/apioo/typeschema/blob/master/schema/schema.json">TypeSchema</a>
  meta schema which describes itself. This is a HTML representation which we
  automatically generate from this meta schema. There is also a <a href="https://github.com/apioo/typeschema/blob/master/schema/schema.ts">TypeScript</a>
  version of the specification.</p>

  <hr>

<div id="CommonProperties" class="psx-object psx-struct"><h1><a href="#CommonProperties">CommonProperties</a></h1><div class="psx-object-description">Common properties which can be used at any schema</div><pre class="psx-object-json"><span class="psx-object-json-pun">{</span>
  <span class="psx-object-json-key">"title"</span><span class="psx-object-json-pun">: </span><span class="psx-property-type">String</span><span class="psx-object-json-pun">,</span>
  <span class="psx-object-json-key">"description"</span><span class="psx-object-json-pun">: </span><span class="psx-property-type">String</span><span class="psx-object-json-pun">,</span>
  <span class="psx-object-json-key">"type"</span><span class="psx-object-json-pun">: </span><span class="psx-property-type">String</span><span class="psx-object-json-pun">,</span>
  <span class="psx-object-json-key">"nullable"</span><span class="psx-object-json-pun">: </span><span class="psx-property-type">Boolean</span><span class="psx-object-json-pun">,</span>
  <span class="psx-object-json-key">"deprecated"</span><span class="psx-object-json-pun">: </span><span class="psx-property-type">Boolean</span><span class="psx-object-json-pun">,</span>
  <span class="psx-object-json-key">"readonly"</span><span class="psx-object-json-pun">: </span><span class="psx-property-type">Boolean</span><span class="psx-object-json-pun">,</span>
<span class="psx-object-json-pun">}</span></pre><table class="table psx-object-properties"><colgroup><col width="30%" /><col width="70%" /></colgroup><thead><tr><th>Field</th><th>Description</th></tr></thead><tbody><tr><td><span class="psx-property-name psx-property-optional">title</span></td><td><span class="psx-property-type">String</span><br /><div class="psx-property-description">Distinct word which represents this schema</div></td></tr><tr><td><span class="psx-property-name psx-property-optional">description</span></td><td><span class="psx-property-type">String</span><br /><div class="psx-property-description">General description of this schema, should not contain any new lines.</div></td></tr><tr><td><span class="psx-property-name psx-property-optional">type</span></td><td><span class="psx-property-type">String</span><br /><div class="psx-property-description">JSON type of the property</div><dl class="psx-property-constraint"><dt>Enum</dt><dd><ul class="psx-constraint-enum"><li><code>&quot;object&quot;</code></li><li><code>&quot;array&quot;</code></li><li><code>&quot;boolean&quot;</code></li><li><code>&quot;integer&quot;</code></li><li><code>&quot;number&quot;</code></li><li><code>&quot;string&quot;</code></li></ul></dd></dl></td></tr><tr><td><span class="psx-property-name psx-property-optional">nullable</span></td><td><span class="psx-property-type">Boolean</span><br /><div class="psx-property-description">Indicates whether it is possible to use a null value</div></td></tr><tr><td><span class="psx-property-name psx-property-optional">deprecated</span></td><td><span class="psx-property-type">Boolean</span><br /><div class="psx-property-description">Indicates whether this schema is deprecated</div></td></tr><tr><td><span class="psx-property-name psx-property-optional">readonly</span></td><td><span class="psx-property-type">Boolean</span><br /><div class="psx-property-description">Indicates whether this schema is readonly</div></td></tr></tbody></table></div>

<div id="ScalarProperties" class="psx-object psx-struct"><h1><a href="#ScalarProperties">ScalarProperties</a></h1><pre class="psx-object-json"><span class="psx-object-json-pun">{</span>
  <span class="psx-object-json-key">"format"</span><span class="psx-object-json-pun">: </span><span class="psx-property-type">String</span><span class="psx-object-json-pun">,</span>
  <span class="psx-object-json-key">"enum"</span><span class="psx-object-json-pun">: </span><span class="psx-property-type">Object (<a href="#EnumValue">EnumValue</a>)</span><span class="psx-object-json-pun">,</span>
  <span class="psx-object-json-key">"default"</span><span class="psx-object-json-pun">: </span><span class="psx-property-type">Object (<a href="#ScalarValue">ScalarValue</a>)</span><span class="psx-object-json-pun">,</span>
<span class="psx-object-json-pun">}</span></pre><table class="table psx-object-properties"><colgroup><col width="30%" /><col width="70%" /></colgroup><thead><tr><th>Field</th><th>Description</th></tr></thead><tbody><tr><td><span class="psx-property-name psx-property-optional">format</span></td><td><span class="psx-property-type">String</span><br /><div class="psx-property-description">Describes the specific format of this type i.e. date-time or int64</div></td></tr><tr><td><span class="psx-property-name psx-property-optional">enum</span></td><td><span class="psx-property-type">Object (<a href="#EnumValue">EnumValue</a>)</span><br /><div class="psx-property-description"></div></td></tr><tr><td><span class="psx-property-name psx-property-optional">default</span></td><td><span class="psx-property-type">Object (<a href="#ScalarValue">ScalarValue</a>)</span><br /><div class="psx-property-description"></div></td></tr></tbody></table></div>

<div id="PropertyValue" class="psx-object psx-union"><h1><a href="#PropertyValue">PropertyValue</a></h1><pre class="psx-object-json">OneOf: Object (<a href="#BooleanType">BooleanType</a>) &#124; Object (<a href="#NumberType">NumberType</a>) &#124; Object (<a href="#StringType">StringType</a>) &#124; Object (<a href="#ArrayType">ArrayType</a>) &#124; Object (<a href="#CombinationType">CombinationType</a>) &#124; Object (<a href="#ReferenceType">ReferenceType</a>) &#124; Object (<a href="#GenericType">GenericType</a>)</pre></div>

<div id="Properties" class="psx-object psx-map"><h1><a href="#Properties">Properties</a></h1><pre class="psx-object-json"><span class="psx-object-json-pun">{</span>
  <span class="psx-object-json-key">"*"</span><span class="psx-object-json-pun">: </span><span class="psx-property-type">Object (<a href="#PropertyValue">PropertyValue</a>)</span><span class="psx-object-json-pun">,</span>
<span class="psx-object-json-pun">}</span></pre><table class="table psx-object-properties"><colgroup><col width="30%" /><col width="70%" /></colgroup><thead><tr><th>Field</th><th>Description</th></tr></thead><tbody><tr><td><span class="psx-property-name psx-property-optional">*</span></td><td><span class="psx-property-type">Object (<a href="#PropertyValue">PropertyValue</a>)</span><br /><div class="psx-property-description"></div></td></tr></tbody></table></div>

<div id="ContainerProperties" class="psx-object psx-struct"><h1><a href="#ContainerProperties">ContainerProperties</a></h1><div class="psx-object-description">Properties specific for a container</div><pre class="psx-object-json"><span class="psx-object-json-pun">{</span>
  <span class="psx-object-json-key">"type"</span><span class="psx-object-json-pun">: </span><span class="psx-property-type">String</span><span class="psx-object-json-pun">,</span>
<span class="psx-object-json-pun">}</span></pre><table class="table psx-object-properties"><colgroup><col width="30%" /><col width="70%" /></colgroup><thead><tr><th>Field</th><th>Description</th></tr></thead><tbody><tr><td><span class="psx-property-name psx-property-required">type</span></td><td><span class="psx-property-type">String</span><br /><div class="psx-property-description"></div><dl class="psx-property-constraint"><dt>Enum</dt><dd><ul class="psx-constraint-enum"><li><code>&quot;object&quot;</code></li></ul></dd></dl></td></tr></tbody></table></div>

<div id="StructProperties" class="psx-object psx-struct"><h1><a href="#StructProperties">StructProperties</a></h1><div class="psx-object-description">Struct specific properties</div><pre class="psx-object-json"><span class="psx-object-json-pun">{</span>
  <span class="psx-object-json-key">"final"</span><span class="psx-object-json-pun">: </span><span class="psx-property-type">Boolean</span><span class="psx-object-json-pun">,</span>
  <span class="psx-object-json-key">"properties"</span><span class="psx-object-json-pun">: </span><span class="psx-property-type">Object (<a href="#Properties">Properties</a>)</span><span class="psx-object-json-pun">,</span>
  <span class="psx-object-json-key">"required"</span><span class="psx-object-json-pun">: </span><span class="psx-property-type">Object (<a href="#StringArray">StringArray</a>)</span><span class="psx-object-json-pun">,</span>
<span class="psx-object-json-pun">}</span></pre><table class="table psx-object-properties"><colgroup><col width="30%" /><col width="70%" /></colgroup><thead><tr><th>Field</th><th>Description</th></tr></thead><tbody><tr><td><span class="psx-property-name psx-property-optional">final</span></td><td><span class="psx-property-type">Boolean</span><br /><div class="psx-property-description">Indicates that a struct is final, this means it is not possible to extend this struct</div></td></tr><tr><td><span class="psx-property-name psx-property-required">properties</span></td><td><span class="psx-property-type">Object (<a href="#Properties">Properties</a>)</span><br /><div class="psx-property-description"></div></td></tr><tr><td><span class="psx-property-name psx-property-optional">required</span></td><td><span class="psx-property-type">Object (<a href="#StringArray">StringArray</a>)</span><br /><div class="psx-property-description"></div></td></tr></tbody></table></div>

<div id="StructType" class="psx-object psx-intersection"><h1><a href="#StructType">StructType</a></h1><pre class="psx-object-json">AllOf: Object (<a href="#CommonProperties">CommonProperties</a>) &#38; Object (<a href="#ContainerProperties">ContainerProperties</a>) &#38; Object (<a href="#StructProperties">StructProperties</a>)</pre></div>

<div id="MapProperties" class="psx-object psx-struct"><h1><a href="#MapProperties">MapProperties</a></h1><div class="psx-object-description">Map specific properties</div><pre class="psx-object-json"><span class="psx-object-json-pun">{</span>
  <span class="psx-object-json-key">"additionalProperties"</span><span class="psx-object-json-pun">: </span><span class="psx-property-type">Object (<a href="#PropertyValue">PropertyValue</a>)</span><span class="psx-object-json-pun">,</span>
  <span class="psx-object-json-key">"maxProperties"</span><span class="psx-object-json-pun">: </span><span class="psx-property-type">Integer</span><span class="psx-object-json-pun">,</span>
  <span class="psx-object-json-key">"minProperties"</span><span class="psx-object-json-pun">: </span><span class="psx-property-type">Integer</span><span class="psx-object-json-pun">,</span>
<span class="psx-object-json-pun">}</span></pre><table class="table psx-object-properties"><colgroup><col width="30%" /><col width="70%" /></colgroup><thead><tr><th>Field</th><th>Description</th></tr></thead><tbody><tr><td><span class="psx-property-name psx-property-required">additionalProperties</span></td><td><span class="psx-property-type">Object (<a href="#PropertyValue">PropertyValue</a>)</span><br /><div class="psx-property-description"></div></td></tr><tr><td><span class="psx-property-name psx-property-optional">maxProperties</span></td><td><span class="psx-property-type">Integer</span><br /><div class="psx-property-description">Positive integer value</div><dl class="psx-property-constraint"></dl></td></tr><tr><td><span class="psx-property-name psx-property-optional">minProperties</span></td><td><span class="psx-property-type">Integer</span><br /><div class="psx-property-description">Positive integer value</div><dl class="psx-property-constraint"></dl></td></tr></tbody></table></div>

<div id="MapType" class="psx-object psx-intersection"><h1><a href="#MapType">MapType</a></h1><pre class="psx-object-json">AllOf: Object (<a href="#CommonProperties">CommonProperties</a>) &#38; Object (<a href="#ContainerProperties">ContainerProperties</a>) &#38; Object (<a href="#MapProperties">MapProperties</a>)</pre></div>

<div id="ObjectType" class="psx-object psx-union"><h1><a href="#ObjectType">ObjectType</a></h1><pre class="psx-object-json">OneOf: Object (<a href="#StructType">StructType</a>) &#124; Object (<a href="#MapType">MapType</a>)</pre></div>

<div id="ArrayValue" class="psx-object psx-union"><h1><a href="#ArrayValue">ArrayValue</a></h1><pre class="psx-object-json">OneOf: Object (<a href="#BooleanType">BooleanType</a>) &#124; Object (<a href="#NumberType">NumberType</a>) &#124; Object (<a href="#StringType">StringType</a>) &#124; Object (<a href="#ReferenceType">ReferenceType</a>) &#124; Object (<a href="#GenericType">GenericType</a>)</pre></div>

<div id="ArrayProperties" class="psx-object psx-struct"><h1><a href="#ArrayProperties">ArrayProperties</a></h1><div class="psx-object-description">Array properties</div><pre class="psx-object-json"><span class="psx-object-json-pun">{</span>
  <span class="psx-object-json-key">"type"</span><span class="psx-object-json-pun">: </span><span class="psx-property-type">String</span><span class="psx-object-json-pun">,</span>
  <span class="psx-object-json-key">"items"</span><span class="psx-object-json-pun">: </span><span class="psx-property-type">Object (<a href="#ArrayValue">ArrayValue</a>)</span><span class="psx-object-json-pun">,</span>
  <span class="psx-object-json-key">"maxItems"</span><span class="psx-object-json-pun">: </span><span class="psx-property-type">Integer</span><span class="psx-object-json-pun">,</span>
  <span class="psx-object-json-key">"minItems"</span><span class="psx-object-json-pun">: </span><span class="psx-property-type">Integer</span><span class="psx-object-json-pun">,</span>
  <span class="psx-object-json-key">"uniqueItems"</span><span class="psx-object-json-pun">: </span><span class="psx-property-type">Boolean</span><span class="psx-object-json-pun">,</span>
<span class="psx-object-json-pun">}</span></pre><table class="table psx-object-properties"><colgroup><col width="30%" /><col width="70%" /></colgroup><thead><tr><th>Field</th><th>Description</th></tr></thead><tbody><tr><td><span class="psx-property-name psx-property-required">type</span></td><td><span class="psx-property-type">String</span><br /><div class="psx-property-description"></div><dl class="psx-property-constraint"><dt>Enum</dt><dd><ul class="psx-constraint-enum"><li><code>&quot;array&quot;</code></li></ul></dd></dl></td></tr><tr><td><span class="psx-property-name psx-property-required">items</span></td><td><span class="psx-property-type">Object (<a href="#ArrayValue">ArrayValue</a>)</span><br /><div class="psx-property-description"></div></td></tr><tr><td><span class="psx-property-name psx-property-optional">maxItems</span></td><td><span class="psx-property-type">Integer</span><br /><div class="psx-property-description">Positive integer value</div><dl class="psx-property-constraint"></dl></td></tr><tr><td><span class="psx-property-name psx-property-optional">minItems</span></td><td><span class="psx-property-type">Integer</span><br /><div class="psx-property-description">Positive integer value</div><dl class="psx-property-constraint"></dl></td></tr><tr><td><span class="psx-property-name psx-property-optional">uniqueItems</span></td><td><span class="psx-property-type">Boolean</span><br /><div class="psx-property-description"></div></td></tr></tbody></table></div>

<div id="ArrayType" class="psx-object psx-intersection"><h1><a href="#ArrayType">ArrayType</a></h1><pre class="psx-object-json">AllOf: Object (<a href="#CommonProperties">CommonProperties</a>) &#38; Object (<a href="#ArrayProperties">ArrayProperties</a>)</pre></div>

<div id="BooleanProperties" class="psx-object psx-struct"><h1><a href="#BooleanProperties">BooleanProperties</a></h1><div class="psx-object-description">Boolean properties</div><pre class="psx-object-json"><span class="psx-object-json-pun">{</span>
  <span class="psx-object-json-key">"type"</span><span class="psx-object-json-pun">: </span><span class="psx-property-type">String</span><span class="psx-object-json-pun">,</span>
<span class="psx-object-json-pun">}</span></pre><table class="table psx-object-properties"><colgroup><col width="30%" /><col width="70%" /></colgroup><thead><tr><th>Field</th><th>Description</th></tr></thead><tbody><tr><td><span class="psx-property-name psx-property-required">type</span></td><td><span class="psx-property-type">String</span><br /><div class="psx-property-description"></div><dl class="psx-property-constraint"><dt>Enum</dt><dd><ul class="psx-constraint-enum"><li><code>&quot;boolean&quot;</code></li></ul></dd></dl></td></tr></tbody></table></div>

<div id="BooleanType" class="psx-object psx-intersection"><h1><a href="#BooleanType">BooleanType</a></h1><pre class="psx-object-json">AllOf: Object (<a href="#CommonProperties">CommonProperties</a>) &#38; Object (<a href="#ScalarProperties">ScalarProperties</a>) &#38; Object (<a href="#BooleanProperties">BooleanProperties</a>)</pre></div>

<div id="NumberProperties" class="psx-object psx-struct"><h1><a href="#NumberProperties">NumberProperties</a></h1><div class="psx-object-description">Number properties</div><pre class="psx-object-json"><span class="psx-object-json-pun">{</span>
  <span class="psx-object-json-key">"type"</span><span class="psx-object-json-pun">: </span><span class="psx-property-type">String</span><span class="psx-object-json-pun">,</span>
  <span class="psx-object-json-key">"multipleOf"</span><span class="psx-object-json-pun">: </span><span class="psx-property-type">Number</span><span class="psx-object-json-pun">,</span>
  <span class="psx-object-json-key">"maximum"</span><span class="psx-object-json-pun">: </span><span class="psx-property-type">Number</span><span class="psx-object-json-pun">,</span>
  <span class="psx-object-json-key">"exclusiveMaximum"</span><span class="psx-object-json-pun">: </span><span class="psx-property-type">Boolean</span><span class="psx-object-json-pun">,</span>
  <span class="psx-object-json-key">"minimum"</span><span class="psx-object-json-pun">: </span><span class="psx-property-type">Number</span><span class="psx-object-json-pun">,</span>
  <span class="psx-object-json-key">"exclusiveMinimum"</span><span class="psx-object-json-pun">: </span><span class="psx-property-type">Boolean</span><span class="psx-object-json-pun">,</span>
<span class="psx-object-json-pun">}</span></pre><table class="table psx-object-properties"><colgroup><col width="30%" /><col width="70%" /></colgroup><thead><tr><th>Field</th><th>Description</th></tr></thead><tbody><tr><td><span class="psx-property-name psx-property-required">type</span></td><td><span class="psx-property-type">String</span><br /><div class="psx-property-description"></div><dl class="psx-property-constraint"><dt>Enum</dt><dd><ul class="psx-constraint-enum"><li><code>&quot;number&quot;</code></li><li><code>&quot;integer&quot;</code></li></ul></dd></dl></td></tr><tr><td><span class="psx-property-name psx-property-optional">multipleOf</span></td><td><span class="psx-property-type">Number</span><br /><div class="psx-property-description"></div><dl class="psx-property-constraint"></dl></td></tr><tr><td><span class="psx-property-name psx-property-optional">maximum</span></td><td><span class="psx-property-type">Number</span><br /><div class="psx-property-description"></div></td></tr><tr><td><span class="psx-property-name psx-property-optional">exclusiveMaximum</span></td><td><span class="psx-property-type">Boolean</span><br /><div class="psx-property-description"></div></td></tr><tr><td><span class="psx-property-name psx-property-optional">minimum</span></td><td><span class="psx-property-type">Number</span><br /><div class="psx-property-description"></div></td></tr><tr><td><span class="psx-property-name psx-property-optional">exclusiveMinimum</span></td><td><span class="psx-property-type">Boolean</span><br /><div class="psx-property-description"></div></td></tr></tbody></table></div>

<div id="NumberType" class="psx-object psx-intersection"><h1><a href="#NumberType">NumberType</a></h1><pre class="psx-object-json">AllOf: Object (<a href="#CommonProperties">CommonProperties</a>) &#38; Object (<a href="#ScalarProperties">ScalarProperties</a>) &#38; Object (<a href="#NumberProperties">NumberProperties</a>)</pre></div>

<div id="StringProperties" class="psx-object psx-struct"><h1><a href="#StringProperties">StringProperties</a></h1><div class="psx-object-description">String properties</div><pre class="psx-object-json"><span class="psx-object-json-pun">{</span>
  <span class="psx-object-json-key">"type"</span><span class="psx-object-json-pun">: </span><span class="psx-property-type">String</span><span class="psx-object-json-pun">,</span>
  <span class="psx-object-json-key">"maxLength"</span><span class="psx-object-json-pun">: </span><span class="psx-property-type">Integer</span><span class="psx-object-json-pun">,</span>
  <span class="psx-object-json-key">"minLength"</span><span class="psx-object-json-pun">: </span><span class="psx-property-type">Integer</span><span class="psx-object-json-pun">,</span>
  <span class="psx-object-json-key">"pattern"</span><span class="psx-object-json-pun">: </span><span class="psx-property-type">String</span><span class="psx-object-json-pun">,</span>
<span class="psx-object-json-pun">}</span></pre><table class="table psx-object-properties"><colgroup><col width="30%" /><col width="70%" /></colgroup><thead><tr><th>Field</th><th>Description</th></tr></thead><tbody><tr><td><span class="psx-property-name psx-property-required">type</span></td><td><span class="psx-property-type">String</span><br /><div class="psx-property-description"></div><dl class="psx-property-constraint"><dt>Enum</dt><dd><ul class="psx-constraint-enum"><li><code>&quot;string&quot;</code></li></ul></dd></dl></td></tr><tr><td><span class="psx-property-name psx-property-optional">maxLength</span></td><td><span class="psx-property-type">Integer</span><br /><div class="psx-property-description">Positive integer value</div><dl class="psx-property-constraint"></dl></td></tr><tr><td><span class="psx-property-name psx-property-optional">minLength</span></td><td><span class="psx-property-type">Integer</span><br /><div class="psx-property-description">Positive integer value</div><dl class="psx-property-constraint"></dl></td></tr><tr><td><span class="psx-property-name psx-property-optional">pattern</span></td><td><span class="psx-property-type">String</span><br /><div class="psx-property-description"></div></td></tr></tbody></table></div>

<div id="StringType" class="psx-object psx-intersection"><h1><a href="#StringType">StringType</a></h1><pre class="psx-object-json">AllOf: Object (<a href="#CommonProperties">CommonProperties</a>) &#38; Object (<a href="#ScalarProperties">ScalarProperties</a>) &#38; Object (<a href="#StringProperties">StringProperties</a>)</pre></div>

<div id="AllOfValue" class="psx-object psx-union"><h1><a href="#AllOfValue">AllOfValue</a></h1><pre class="psx-object-json">OneOf: Object (<a href="#ReferenceType">ReferenceType</a>)</pre></div>

<div id="AllOfProperties" class="psx-object psx-struct"><h1><a href="#AllOfProperties">AllOfProperties</a></h1><div class="psx-object-description">An intersection type combines multiple schemas into one</div><pre class="psx-object-json"><span class="psx-object-json-pun">{</span>
  <span class="psx-object-json-key">"description"</span><span class="psx-object-json-pun">: </span><span class="psx-property-type">String</span><span class="psx-object-json-pun">,</span>
  <span class="psx-object-json-key">"allOf"</span><span class="psx-object-json-pun">: </span><span class="psx-property-type">Array (Object (<a href="#AllOfValue">AllOfValue</a>))</span><span class="psx-object-json-pun">,</span>
<span class="psx-object-json-pun">}</span></pre><table class="table psx-object-properties"><colgroup><col width="30%" /><col width="70%" /></colgroup><thead><tr><th>Field</th><th>Description</th></tr></thead><tbody><tr><td><span class="psx-property-name psx-property-optional">description</span></td><td><span class="psx-property-type">String</span><br /><div class="psx-property-description"></div></td></tr><tr><td><span class="psx-property-name psx-property-required">allOf</span></td><td><span class="psx-property-type">Array (Object (<a href="#AllOfValue">AllOfValue</a>))</span><br /><div class="psx-property-description">Combination values</div></td></tr></tbody></table></div>

<div id="DiscriminatorMapping" class="psx-object psx-map"><h1><a href="#DiscriminatorMapping">DiscriminatorMapping</a></h1><pre class="psx-object-json"><span class="psx-object-json-pun">{</span>
  <span class="psx-object-json-key">"*"</span><span class="psx-object-json-pun">: </span><span class="psx-property-type">String</span><span class="psx-object-json-pun">,</span>
<span class="psx-object-json-pun">}</span></pre><table class="table psx-object-properties"><colgroup><col width="30%" /><col width="70%" /></colgroup><thead><tr><th>Field</th><th>Description</th></tr></thead><tbody><tr><td><span class="psx-property-name psx-property-optional">*</span></td><td><span class="psx-property-type">String</span><br /><div class="psx-property-description"></div></td></tr></tbody></table></div>

<div id="Discriminator" class="psx-object psx-struct"><h1><a href="#Discriminator">Discriminator</a></h1><div class="psx-object-description">Adds support for polymorphism. The discriminator is an object name that is used to differentiate between other schemas which may satisfy the payload description</div><pre class="psx-object-json"><span class="psx-object-json-pun">{</span>
  <span class="psx-object-json-key">"propertyName"</span><span class="psx-object-json-pun">: </span><span class="psx-property-type">String</span><span class="psx-object-json-pun">,</span>
  <span class="psx-object-json-key">"mapping"</span><span class="psx-object-json-pun">: </span><span class="psx-property-type">Object (<a href="#DiscriminatorMapping">DiscriminatorMapping</a>)</span><span class="psx-object-json-pun">,</span>
<span class="psx-object-json-pun">}</span></pre><table class="table psx-object-properties"><colgroup><col width="30%" /><col width="70%" /></colgroup><thead><tr><th>Field</th><th>Description</th></tr></thead><tbody><tr><td><span class="psx-property-name psx-property-required">propertyName</span></td><td><span class="psx-property-type">String</span><br /><div class="psx-property-description">The name of the property in the payload that will hold the discriminator value</div></td></tr><tr><td><span class="psx-property-name psx-property-optional">mapping</span></td><td><span class="psx-property-type">Object (<a href="#DiscriminatorMapping">DiscriminatorMapping</a>)</span><br /><div class="psx-property-description"></div></td></tr></tbody></table></div>

<div id="OneOfValue" class="psx-object psx-union"><h1><a href="#OneOfValue">OneOfValue</a></h1><pre class="psx-object-json">OneOf: Object (<a href="#NumberType">NumberType</a>) &#124; Object (<a href="#StringType">StringType</a>) &#124; Object (<a href="#BooleanType">BooleanType</a>) &#124; Object (<a href="#ReferenceType">ReferenceType</a>)</pre></div>

<div id="OneOfProperties" class="psx-object psx-struct"><h1><a href="#OneOfProperties">OneOfProperties</a></h1><div class="psx-object-description">An union type can contain one of the provided schemas</div><pre class="psx-object-json"><span class="psx-object-json-pun">{</span>
  <span class="psx-object-json-key">"description"</span><span class="psx-object-json-pun">: </span><span class="psx-property-type">String</span><span class="psx-object-json-pun">,</span>
  <span class="psx-object-json-key">"discriminator"</span><span class="psx-object-json-pun">: </span><span class="psx-property-type">Object (<a href="#Discriminator">Discriminator</a>)</span><span class="psx-object-json-pun">,</span>
  <span class="psx-object-json-key">"oneOf"</span><span class="psx-object-json-pun">: </span><span class="psx-property-type">Array (Object (<a href="#OneOfValue">OneOfValue</a>))</span><span class="psx-object-json-pun">,</span>
<span class="psx-object-json-pun">}</span></pre><table class="table psx-object-properties"><colgroup><col width="30%" /><col width="70%" /></colgroup><thead><tr><th>Field</th><th>Description</th></tr></thead><tbody><tr><td><span class="psx-property-name psx-property-optional">description</span></td><td><span class="psx-property-type">String</span><br /><div class="psx-property-description"></div></td></tr><tr><td><span class="psx-property-name psx-property-optional">discriminator</span></td><td><span class="psx-property-type">Object (<a href="#Discriminator">Discriminator</a>)</span><br /><div class="psx-property-description"></div></td></tr><tr><td><span class="psx-property-name psx-property-required">oneOf</span></td><td><span class="psx-property-type">Array (Object (<a href="#OneOfValue">OneOfValue</a>))</span><br /><div class="psx-property-description">Combination values</div></td></tr></tbody></table></div>

<div id="CombinationType" class="psx-object psx-union"><h1><a href="#CombinationType">CombinationType</a></h1><pre class="psx-object-json">OneOf: Object (<a href="#AllOfProperties">AllOfProperties</a>) &#124; Object (<a href="#OneOfProperties">OneOfProperties</a>)</pre></div>

<div id="TemplateProperties" class="psx-object psx-map"><h1><a href="#TemplateProperties">TemplateProperties</a></h1><pre class="psx-object-json"><span class="psx-object-json-pun">{</span>
  <span class="psx-object-json-key">"*"</span><span class="psx-object-json-pun">: </span><span class="psx-property-type">String</span><span class="psx-object-json-pun">,</span>
<span class="psx-object-json-pun">}</span></pre><table class="table psx-object-properties"><colgroup><col width="30%" /><col width="70%" /></colgroup><thead><tr><th>Field</th><th>Description</th></tr></thead><tbody><tr><td><span class="psx-property-name psx-property-optional">*</span></td><td><span class="psx-property-type">String</span><br /><div class="psx-property-description"></div></td></tr></tbody></table></div>

<div id="ReferenceType" class="psx-object psx-struct"><h1><a href="#ReferenceType">ReferenceType</a></h1><div class="psx-object-description">Represents a reference to another schema</div><pre class="psx-object-json"><span class="psx-object-json-pun">{</span>
  <span class="psx-object-json-key">"ref"</span><span class="psx-object-json-pun">: </span><span class="psx-property-type">String</span><span class="psx-object-json-pun">,</span>
  <span class="psx-object-json-key">"template"</span><span class="psx-object-json-pun">: </span><span class="psx-property-type">Object (<a href="#TemplateProperties">TemplateProperties</a>)</span><span class="psx-object-json-pun">,</span>
<span class="psx-object-json-pun">}</span></pre><table class="table psx-object-properties"><colgroup><col width="30%" /><col width="70%" /></colgroup><thead><tr><th>Field</th><th>Description</th></tr></thead><tbody><tr><td><span class="psx-property-name psx-property-required">ref</span></td><td><span class="psx-property-type">String</span><br /><div class="psx-property-description">Reference to a schema under the definitions key</div></td></tr><tr><td><span class="psx-property-name psx-property-optional">template</span></td><td><span class="psx-property-type">Object (<a href="#TemplateProperties">TemplateProperties</a>)</span><br /><div class="psx-property-description">Optional concrete schema definitions which replace generic template types</div></td></tr></tbody></table></div>

<div id="GenericType" class="psx-object psx-struct"><h1><a href="#GenericType">GenericType</a></h1><div class="psx-object-description">Represents a generic type</div><pre class="psx-object-json"><span class="psx-object-json-pun">{</span>
  <span class="psx-object-json-key">"generic"</span><span class="psx-object-json-pun">: </span><span class="psx-property-type">String</span><span class="psx-object-json-pun">,</span>
<span class="psx-object-json-pun">}</span></pre><table class="table psx-object-properties"><colgroup><col width="30%" /><col width="70%" /></colgroup><thead><tr><th>Field</th><th>Description</th></tr></thead><tbody><tr><td><span class="psx-property-name psx-property-required">generic</span></td><td><span class="psx-property-type">String</span><br /><div class="psx-property-description"></div></td></tr></tbody></table></div>

<div id="DefinitionValue" class="psx-object psx-union"><h1><a href="#DefinitionValue">DefinitionValue</a></h1><pre class="psx-object-json">OneOf: Object (<a href="#ObjectType">ObjectType</a>) &#124; Object (<a href="#ArrayType">ArrayType</a>) &#124; Object (<a href="#CombinationType">CombinationType</a>)</pre></div>

<div id="Definitions" class="psx-object psx-map"><h1><a href="#Definitions">Definitions</a></h1><pre class="psx-object-json"><span class="psx-object-json-pun">{</span>
  <span class="psx-object-json-key">"*"</span><span class="psx-object-json-pun">: </span><span class="psx-property-type">Object (<a href="#DefinitionValue">DefinitionValue</a>)</span><span class="psx-object-json-pun">,</span>
<span class="psx-object-json-pun">}</span></pre><table class="table psx-object-properties"><colgroup><col width="30%" /><col width="70%" /></colgroup><thead><tr><th>Field</th><th>Description</th></tr></thead><tbody><tr><td><span class="psx-property-name psx-property-optional">*</span></td><td><span class="psx-property-type">Object (<a href="#DefinitionValue">DefinitionValue</a>)</span><br /><div class="psx-property-description"></div></td></tr></tbody></table></div>

<div id="Import" class="psx-object psx-map"><h1><a href="#Import">Import</a></h1><pre class="psx-object-json"><span class="psx-object-json-pun">{</span>
  <span class="psx-object-json-key">"*"</span><span class="psx-object-json-pun">: </span><span class="psx-property-type">String</span><span class="psx-object-json-pun">,</span>
<span class="psx-object-json-pun">}</span></pre><table class="table psx-object-properties"><colgroup><col width="30%" /><col width="70%" /></colgroup><thead><tr><th>Field</th><th>Description</th></tr></thead><tbody><tr><td><span class="psx-property-name psx-property-optional">*</span></td><td><span class="psx-property-type">String</span><br /><div class="psx-property-description"></div></td></tr></tbody></table></div>

<div id="EnumValue" class="psx-object psx-union"><h1><a href="#EnumValue">EnumValue</a></h1><pre class="psx-object-json">OneOf: Object (<a href="#StringArray">StringArray</a>) &#124; Object (<a href="#NumberArray">NumberArray</a>)</pre></div>

<div id="ScalarValue" class="psx-object psx-union"><h1><a href="#ScalarValue">ScalarValue</a></h1><pre class="psx-object-json">OneOf: String &#124; Number &#124; Boolean</pre></div>

<div id="StringArray" class="psx-object psx-array"><h1><a href="#StringArray">StringArray</a></h1><pre class="psx-object-json">Array (String)</pre></div>

<div id="NumberArray" class="psx-object psx-array"><h1><a href="#NumberArray">NumberArray</a></h1><pre class="psx-object-json">Array (Number)</pre></div>

<div id="Root" class="psx-object psx-struct"><h1><a href="#Root">Root</a></h1><div class="psx-object-description">Reference a root schema at the definitions</div><pre class="psx-object-json"><span class="psx-object-json-pun">{</span>
  <span class="psx-object-json-key">"import"</span><span class="psx-object-json-pun">: </span><span class="psx-property-type">Object (<a href="#Import">Import</a>)</span><span class="psx-object-json-pun">,</span>
  <span class="psx-object-json-key">"definitions"</span><span class="psx-object-json-pun">: </span><span class="psx-property-type">Object (<a href="#Definitions">Definitions</a>)</span><span class="psx-object-json-pun">,</span>
  <span class="psx-object-json-key">"ref"</span><span class="psx-object-json-pun">: </span><span class="psx-property-type">String</span><span class="psx-object-json-pun">,</span>
<span class="psx-object-json-pun">}</span></pre><table class="table psx-object-properties"><colgroup><col width="30%" /><col width="70%" /></colgroup><thead><tr><th>Field</th><th>Description</th></tr></thead><tbody><tr><td><span class="psx-property-name psx-property-optional">import</span></td><td><span class="psx-property-type">Object (<a href="#Import">Import</a>)</span><br /><div class="psx-property-description"></div></td></tr><tr><td><span class="psx-property-name psx-property-required">definitions</span></td><td><span class="psx-property-type">Object (<a href="#Definitions">Definitions</a>)</span><br /><div class="psx-property-description"></div></td></tr><tr><td><span class="psx-property-name psx-property-required">ref</span></td><td><span class="psx-property-type">String</span><br /><div class="psx-property-description">Reference to a root schema under the definitions key</div></td></tr></tbody></table></div>

</div>

<?php include __DIR__ . '/inc/footer.php'; ?>

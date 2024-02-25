<?php ?>
<ul class="list-group">
	<li class="list-group-item disabled" aria-disabled="true">A disabled item</li>
	<li class="list-group-item">A second item</li>
	<li class="list-group-item">A third item</li>
	<li class="list-group-item">A fourth item</li>
	<li class="list-group-item">And a fifth one</li>
</ul>

<ul class="list-group list-group-flush">
	<li class="list-group-item">An item</li>
	<li class="list-group-item">A second item</li>
	<li class="list-group-item">A third item</li>
	<li class="list-group-item">A fourth item</li>
	<li class="list-group-item">And a fifth one</li>
</ul>

<div class="list-group">
	<a href="#" class="list-group-item list-group-item-action">A simple default list group item</a>
	{{< list.inline >}}
	{{- range (index $.Site.Data "theme-colors") }}
	<a href="#" class="list-group-item list-group-item-action list-group-item-{{ .name }}">A simple {{ .name }} list group item</a>
	{{- end -}}
	{{< /list.inline >}}
</div>

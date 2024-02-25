<?php

?>

<p class="h1">Example heading <span class="badge bg-primary">New</span></p>
<p class="h2">Example heading <span class="badge bg-secondary">New</span></p>
<p class="h3">Example heading <span class="badge bg-success">New</span></p>
<p class="h4">Example heading <span class="badge bg-danger">New</span></p>
<p class="h5">Example heading <span class="badge text-bg-warning">New</span></p>
<p class="h6">Example heading <span class="badge text-bg-info">New</span></p>
<p class="h6">Example heading <span class="badge text-bg-light">New</span></p>
<p class="h6">Example heading <span class="badge bg-dark">New</span></p>

{{< badge.inline >}}
{{- range (index $.Site.Data "theme-colors") }}
<span class="badge rounded-pill {{ if or (eq .name "light") (eq .name "warning") (eq .name "info") }}text-{{ end }}bg-{{ .name }}">{{ .name | title }}</span>{{- end -}}
{{< /badge.inline >}}

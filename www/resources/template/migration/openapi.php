
<?php include __DIR__ . '/../inc/header.php'; ?>

<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item active" aria-current="page"><a href="<?php echo $url; ?>">TypeSchema</a> / Migration / OpenAPI</li>
  </ol>
</nav>

<div class="container">
  <h1 class="display-4">OpenAPI</h1>
  <div class="alert alert-info" role="alert">
    Through this form you can migrate an existing OpenAPI specification to TypeSchema. This allows you to use the OpenAPI
    spec to generate a client SDK.
  </div>
  <div class="row">
    <div class="col-6">
      <form method="post">
        <div class="form-group">
          <label for="schema">Schema</label>
          <textarea id="schema" name="schema" rows="18" class="form-control"><?php echo htmlspecialchars($schema); ?></textarea>
        </div>
        <input type="submit" value="Migrate" class="btn btn-primary">
      </form>
    </div>
    <div class="col-6">
      <div><pre><code class="json"><?php echo isset($output) ? htmlspecialchars($output) : ''; ?></code></pre></div>
    </div>
  </div>
</div>

<script>hljs.initHighlightingOnLoad();</script>

<?php include __DIR__ . '/../inc/footer.php'; ?>

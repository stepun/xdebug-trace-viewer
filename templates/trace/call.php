<?php
use Vtk13\LibXdebugTrace\Trace\Node;
use Vtk13\LibXdebugTrace\Trace\StackTrace;

/* @var $node Node */
/* @var $traceName string */

?><div class="row">
    <div class="col-md-4">
        <?php include 'templates/widgets/trace-search.php'; ?>
        <?php include 'templates/widgets/file-hierarchy.php'; ?>
    </div>
    <div class="col-md-8">
        <div class="list-group">
            <div class="list-group-item active">Stack trace for node #<?php echo $node->callId; ?></div>
        <?php
        $stack = new StackTrace($node);
        while ($node->parent) {
            $basename = basename($node->file);
            echo <<<HTML
        <a class="list-group-item" title="{$node->file}" href="/trace/view?trace={$traceName}&file={$node->file}#line{$node->line}">
            #{$node->callId} {$node->timeStart}s {$basename}:{$node->line} {$node->function}()
        </a>
HTML;
            $node = $node->parent;
        }
        ?>
        </div>
</div>
</div>
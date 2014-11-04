<div class="panel panel-default">
    <div class="panel-heading">Search for function name</div>
    <div class="panel-body">
        <form action="/trace/search_function" method="GET">
            <div>
                <input type="hidden" name="trace" value="<?php echo isset($_GET['trace']) ? htmlspecialchars($_GET['trace']) : '' ?>">
                ~<input type="text" name="function_term" value="<?php echo isset($_GET['function_term']) ? htmlspecialchars($_GET['function_term']) : '' ?>"
                       placeholder="regexp by function name">~<input style="width: 30px;" type="text" name="function_mod" value="<?php echo isset($_GET['function_mod']) ? htmlspecialchars($_GET['function_mod']) : 'i' ?>">
                <button type="submit">Search</button>
            </div>
        </form>
    </div>
</div>

<div class="panel panel-default">
    <div class="panel-heading">Search for parameter value</div>
    <div class="panel-body">
        <form action="/trace/search_parameter" method="GET">
            <div>
                <input type="hidden" name="trace" value="<?php echo isset($_GET['trace']) ? htmlspecialchars($_GET['trace']) : '' ?>">
                ~<input type="text" name="parameter_term" value="<?php echo isset($_GET['parameter_term']) ? htmlspecialchars($_GET['parameter_term']) : '' ?>"
                        placeholder="regexp by parameters value">~<input style="width: 30px;" type="text" name="parameter_mod" value="<?php echo isset($_GET['parameter_mod']) ? htmlspecialchars($_GET['parameter_mod']) : 'i' ?>">
                <button type="submit">Search</button>
            </div>
        </form>
    </div>
</div>
[expect php]
[file]
<?
echo chunk_split('abc', 1, '-')."\n";
echo chunk_split('foooooooooooooooo', 5)."\n";
echo chunk_split(str_repeat('X', 2*76))."\n";
echo chunk_split("test", 10, "|end") . "\n";
?>

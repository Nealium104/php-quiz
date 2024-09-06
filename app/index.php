<?php
    $value = isset($_GET['id']) ? $_GET['id'] : '';
?>

<?php
    $questions = [
        1 => [
            "q" => "What is 2x2?",
            "a" => "4"
        ],
        2 => [
            "q" => "What is jazz?",
            "a" => "John Coltrane"
        ],
    ]
?>

<html>
    <head>
        <script src="https://cdn.tailwindcss.com"></script>
        <title>Quiz App</title>
    </head>
    <body class="text-[#a2a3aa] bg-[#151627] p-8">
        <nav class="w-full">
            <ul class="flex gap-8 font-bold">
                <li class="transition duration-110 hover:scale-110 hover:text-[#c66c59]">
                    <a href="/">Home</a>
                </li>
                <li class="transition duration-110 hover:scale-110 hover:text-[#c66c59]">
                    <a href="/info">Info</a>
                </li>
            </ul>
        </nav>
        <div class="pb-2">
            <h1 class="text-[#c66c59] text-4xl font-bold pt-8">Ganki</h1>
            <span class="italic">You can find questions below</span>
        </div>
        <div class="max-w-[500px]">
            <div class="flex gap-2 italic">
                <button class="border-t-[1px] border-l-[1px] border-r-[1px] border-[#a2a3aa] w-fit px-4 py-2">study</h2>
                <button class="border-t-[1px] border-l-[1px] border-r-[1px] border-[#a2a3aa] w-fit px-4 py-2">create</h2>
            </div>
            <div class="flex flex-col w-full ring-[1px] ring-inset ring-[#a2a3aa] bg-[#0e0f1b] shadow-xl p-4 gap-4">
                <?php include("study.php"); ?>
                <?php include("create.php"); ?>
            </div>
        </div>
    </body>
</html>      
<script>
        const revealButton = document.querySelector("#reveal");
        const answer = document.querySelector("#answer")
        revealButton.addEventListener('click', () => {
            answer.style.display = "block";
            revealButton.style.display = "none";
        })
</script>
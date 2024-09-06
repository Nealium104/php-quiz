<?php
    $questions = [
        1 => [
            "q" => "What is 2x2?",
            "a" => "4"
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
        <div class="flex flex-col ring-1 ring-[#a2a3aa] w-fit bg-[#0e0f1b] shadow-xl p-4 gap-4">
            <?php foreach($questions as $question): ?>
                <p class="text-2xl font-bold"><?= $question["q"]?></p>
                <p style="display:none;" id="answer"><?= $question["a"]?></p>
            <?php endforeach; ?>
            <button id="reveal" class="py-2 px-4 rounded-full mx-auto bg-[#3e4173] transition hover:duration-110 hover:text-[#a42323] hover:ring-1 hover:ring-[#a2a3aa] hover:bg-[#151627]">Reveal</button>
            <ul class="py-4 flex gap-4 items-center">
                <li class="py-2 px-4 bg-[#3e4173] transition hover:duration-110 hover:text-[#a42323] hover:ring-1 hover:ring-[#a2a3aa] hover:bg-[#151627]">Again</li>
                <li class="py-2 px-4 bg-[#3e4173] transition hover:duration-110 hover:text-[#c66c59] hover:ring-1 hover:ring-[#a2a3aa] hover:bg-[#151627]">Hard</li>
                <li class="py-2 px-4 bg-[#3e4173] transition hover:duration-110 hover:text-[#58c66c] hover:ring-1 hover:ring-[#a2a3aa] hover:bg-[#151627]">Good</li>
                <li class="py-2 px-4 bg-[#3e4173] transition hover:duration-110 hover:text-[#5879c6] hover:ring-1 hover:ring-[#a2a3aa] hover:bg-[#151627]">Easy</li>
            </ul>
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

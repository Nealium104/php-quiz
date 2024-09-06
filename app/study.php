    <p class="text-2xl font-bold"><?= $questions[$value]["q"]?></p>
    <p style="display:none;" id="answer"><?= $questions[$value]["a"]?></p>
    <button id="reveal" class="py-2 px-4 rounded-full mx-auto bg-[#3e4173] transition hover:duration-110 hover:text-[#a42323] hover:ring-1 hover:ring-[#a2a3aa] hover:bg-[#151627]">Reveal</button>
    <ul class="py-4 flex gap-4 items-center justify-center" >
        <li class="py-2 px-4 bg-[#3e4173] transition hover:duration-110 hover:text-[#a42323] hover:ring-1 hover:ring-[#a2a3aa] hover:bg-[#151627]">Again</li>
        <li class="py-2 px-4 bg-[#3e4173] transition hover:duration-110 hover:text-[#c66c59] hover:ring-1 hover:ring-[#a2a3aa] hover:bg-[#151627]">Hard</li>
        <li class="py-2 px-4 bg-[#3e4173] transition hover:duration-110 hover:text-[#58c66c] hover:ring-1 hover:ring-[#a2a3aa] hover:bg-[#151627]">Good</li>
        <li class="py-2 px-4 bg-[#3e4173] transition hover:duration-110 hover:text-[#5879c6] hover:ring-1 hover:ring-[#a2a3aa] hover:bg-[#151627]">Easy</li>
    </ul>
    
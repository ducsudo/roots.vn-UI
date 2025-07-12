<div class="flex space-x-2">
  <button onclick="setTab(1)" class="group px-4 py-2 border rounded-md" id="tab1">
    <span class="group-[aria-selected='true']:text-blue-600">Tab 1</span>
  </button>
  <button onclick="setTab(2)" class="group px-4 py-2 border rounded-md" id="tab2">
    <span class="group-[aria-selected='true']:text-blue-600">Tab 2</span>
  </button>
</div>

<div class="mt-4">
  <div id="content1" class="hidden">Content 1</div>
  <div id="content2" class="hidden">Content 2</div>
</div>

<script>
  function setTab(tab) {
    document.querySelectorAll('button[id^="tab"]').forEach(btn => {
      btn.setAttribute('aria-selected', btn.id === `tab${tab}`);
    });
    document.querySelectorAll('div[id^="content"]').forEach(div => {
      div.classList.add('hidden');
    });
    document.getElementById(`content${tab}`).classList.remove('hidden');
  }

  // Initialize tab 1 as active
  setTab(1);
</script>

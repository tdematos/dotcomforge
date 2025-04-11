wp.blocks.registerBlockType("ourblocktheme/Header", {
  title: "Header",
  edit: EditComponent,
  save: SaveComponent,
});

function EditComponent() {
  return (
    <nav>
      <div>
        <ul>
          <li>About</li>
        </ul>
      </div>
    </nav>
  );
}

function SaveComponent() {}

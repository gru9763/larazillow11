<template>
  <div class="tetris">
    <div v-for="(row, rowIndex) in grid" :key="rowIndex" class="row">
      <div
        v-for="(cell, colIndex) in row"
        :key="colIndex"
        :class="['block', cell === 1 ? 'filled' : 'empty']"
      ></div>
    </div>
  </div>
</template>

<script>
export default {
  name: 'TetrisGame',
  data() {
    return {
      gridWidth: 10,
      gridHeight: 20,
      grid: [],
      currentShape: null,
      currentShapePosition: { x: 0, y: 0 },
      intervalId: null,
      shapes: [
        [[1, 1], [1, 1]], // Square shape
        [[1, 0, 0], [1, 1, 1]], // L shape
        [[0, 0, 1], [1, 1, 1]], // Reverse L shape
        [[1], [1], [1], [1]], // Line shape
        [[1, 1, 1], [0, 1, 0]], // T shape
      ],
    };
  },
  created() {
    this.initGrid();
    this.startGame();
  },
  methods: {
    // Initialize grid
    initGrid() {
      this.grid = Array.from({ length: this.gridHeight }, () => Array(this.gridWidth).fill(0));
    },

    // Start game
    startGame() {
      this.currentShape = this.generateRandomShape();
      this.intervalId = setInterval(this.moveShapeDown, 500); // Adjust speed as needed
    },

    // Generate random Tetris shape
    generateRandomShape() {
      const randomIdx = Math.floor(Math.random() * this.shapes.length);
      return this.shapes[randomIdx];
    },

    // Move shape down
    moveShapeDown() {
      if (!this.checkCollision(this.currentShape, { x: this.currentShapePosition.x, y: this.currentShapePosition.y + 1 })) {
        this.currentShapePosition.y++;
      } else {
        this.placeShapeOnGrid();
        this.clearLines();
        this.currentShape = this.generateRandomShape();
        this.currentShapePosition = { x: 0, y: 0 };
      }
    },

    // Place shape on the grid
    placeShapeOnGrid() {
      this.currentShape.forEach((row, y) => {
        row.forEach((block, x) => {
          if (block) {
            this.$set(this.grid[y + this.currentShapePosition.y], x + this.currentShapePosition.x, 1);
          }
        });
      });
    },

    // Clear completed lines
    clearLines() {
      this.grid = this.grid.filter(row => !row.every(cell => cell === 1));
      const emptyRow = Array(this.gridWidth).fill(0);
      while (this.grid.length < this.gridHeight) {
        this.grid.unshift(emptyRow.slice());
      }
    },

    // Check collision
    checkCollision(shape, position) {
      return shape.some((row, y) => {
        return row.some((block, x) => {
          return block && (this.grid[y + position.y]?.[x + position.x] !== 0);
        });
      });
    },

    // Keyboard controls
    moveShapeLeft() {
      if (!this.checkCollision(this.currentShape, { x: this.currentShapePosition.x - 1, y: this.currentShapePosition.y })) {
        this.currentShapePosition.x--;
      }
    },

    moveShapeRight() {
      if (!this.checkCollision(this.currentShape, { x: this.currentShapePosition.x + 1, y: this.currentShapePosition.y })) {
        this.currentShapePosition.x++;
      }
    },

    accelerateShapeDown() {
      this.moveShapeDown();
    },

    handleKeyDown(event) {
      switch (event.key) {
        case 'ArrowLeft':
          this.moveShapeLeft();
          break;
        case 'ArrowRight':
          this.moveShapeRight();
          break;
        case 'ArrowDown':
          this.accelerateShapeDown();
          break;
      }
    },
  },
  mounted() {
    document.addEventListener('keydown', this.handleKeyDown);
  },
  beforeDestroy() {
    clearInterval(this.intervalId);
    document.removeEventListener('keydown', this.handleKeyDown);
  },
};
</script>

<style scoped>
.tetris {
  display: grid;
  grid-template-columns: repeat(10, 30px);
  grid-template-rows: repeat(20, 30px);
  border: 2px solid #333;
  background-color: #fff;
}

.block {
  width: 30px;
  height: 30px;
  border: 1px solid #ccc;
}

.empty {
  background-color: #ccc;
}

.filled {
  background-color: #00f;
}
</style>

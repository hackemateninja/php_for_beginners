import AppButton from './AppButton.js';
import AppForm from './AppForm.js';
import Icon from "./Icon.js";
import TodoList from "./TodoList.js";

export default {
	components: {
		AppButton,
		AppForm,
		Icon,
		TodoList
	},
	template: /* html */`
	<section>
		<h2 class="text-2xl font-bold mb-4 text-center">Assignments</h2>
		<app-form @createTodo="createTodo"></app-form>
		<div class="flex flex-row items-center justify-evenly">
			<todo-list :todos="filters.inProgress" title="In Progress: " @delete-todo="deleteTodo"></todo-list>
			<todo-list :todos="filters.completed" title="Completed: " @delete-todo="deleteTodo"></todo-list>
		</div>
	</section>
	`,
	data() {
      return {
        todos: [
          { id: 0, title: "Finish project", completed: false, tag: 'programming' },
          { id: 1, title: "Read chapter 4", completed: false, tag: 'programming' },
          { id: 2, title: "Sell some shampoos", completed: false, tag: 'shampoo' },
					{ id: 3, title: "Do some karate classes", completed: false, tag: 'martial-arts'}
        ]
      };
    },
    computed: {
			filters(){
				return {
					completed: this.todos.filter(todo => todo.completed),
					inProgress: this.todos.filter(todo => !todo.completed),
				}
			},
    },
    methods: {
      createTodo(name) {
        this.todos.unshift({
          id: this.todos.length + 1,
          title: name,
          completed: false,
					tag: 'programming'
        });
      },
      deleteTodo(todo) {
        this.todos = this.todos.filter(t => t !== todo);
      }
    }
}
export default {
	template: /* html */ `
		<button 
			:type="type"
			:class="{
				'py-2 px-6 rounded-md cursor-pointer disabled:cursor-not-allowed text-white': true,
				'bg-black hover:bg-gray-600 disabled:bg-black': variant === 'primary',
				'bg-purple-300 hover:bg-purple-400 disabled:bg-purple-300': variant === 'secondary',
				'bg-gray-200 hover:bg-gray-400 disabled:bg-gray-200 ': variant === 'muted',
				'loader': processing
			}" 
			:disabled="processing"> 
			<slot />
		</button>
	`,
	props: {
		variant:{
			type: String,
			default: "primary",
		},
		type: {
			type: String,
			default: 'submit'
		},
		processing: {
			type: Boolean,
			default: false
		}
	},
}
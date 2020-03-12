import React from 'react';
import ReactDOM from 'react-dom';
import Card from './Card';

function Example() {
	return (
		<div className="container">
			<div className="row justify-content-center">
				<Card />
			</div>
		</div>
	);
}


if (document.getElementById('example')) {
	ReactDOM.render(<Example />, document.getElementById('example'));
}

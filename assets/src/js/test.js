const { render, useState } = wp.element;

const Votes = () => {
	const [ votes, setVotes ] = useState( 0 );
	const addVote = () => {
		setVotes( votes + 1 );
	};

	const removeVote = () => {
		setVotes( votes - 1 );
	};
	return (
        <>
        <div>
            <h2>{ votes } Votes</h2>
            <p>
                <button onClick={ addVote }>Add Vote!</button>
                <button onClick={ removeVote }>Remove Vote!</button>
            </p>
        </div>
    </>
	);
};
export default Votes;
// render( <Votes />, document.getElementById( `react-app` ) );

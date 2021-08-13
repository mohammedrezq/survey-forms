import Repeater from "./survey/Repeater";
import Votes from "./test";

const { render, useState } = wp.element;

const SurveyRepeater = () => {
  const [counter, setCounter] = useState(1);

  const handleClick = () => {
    setCounter(counter + 1);
    console.log(counter);
  };

  return (
    <div>
      <h1>Survey Repeater</h1>
      <Votes />
      <button onClick={handleClick}>New Question</button>
      <div>
        {Array.from(Array(counter)).map((c, index) => {
          return (
            <div key={index} className={`question_item reapetaer_btn_${index}`}>
              <label htmlFor={'question_'+index}>Survey Question</label>
              <input key={c} type="text" id={'question_'+index}></input>
            </div>
          );
        })}
      </div>
    </div>
  );
};
render(<SurveyRepeater />, document.getElementById(`survey_repeater`));

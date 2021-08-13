const { useState } = wp.element;

const Repeater = () => {


    return (
        <div className="surveyRepeater">
            <label htmlFor="surveyQuestion">Survey Question</label>
            <input type="text" name="surveyQuestion" id="surveyQuestion" />
        </div>
    );

};

export default Repeater;
